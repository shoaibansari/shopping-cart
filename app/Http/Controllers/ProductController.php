<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Stripe\Charge;
use Stripe\Stripe;

class ProductController extends Controller
{
    public function getIndex()
    {   
    	$products = Product::all();
    	return view('shop.index', ['products' => $products]);
    }

    public function getAddToCart(Request $request, $id){
       $product = Product::find($id);
       $cart = Session::has('cart') ? Session::get('cart') : null;
       //$cart = new Cart($oldCart);
       if(!$cart)
        {
         $cart = new Cart($cart);
        }
       $cart->add($product, $product->id);
       Session::put('cart', $cart);
       //$request->session()->put('cart', $cart);
       // dd($request->session()->get('cart'));
       return redirect()->route('product.index');
    }

    public function getReduceByOne($id){
      $oldCart = Session::has('cart') ? Session::get('cart') : null;
      $cart = new Cart($oldCart);
      $cart->reduceByOne($id);
      
      if(count($cart->items) > 0){
        Session::put('cart', $cart);
      }else{
        Session::forget('cart');
      }

      return redirect()->route('product.shoppingCart');
    }

    public function getRemoveItem($id){
      $oldCart = Session::has('cart') ? Session::get('cart') : null;
      $cart = new Cart($oldCart);
      $cart->removeItem($id);

      if(count($cart->items) > 0){
        Session::put('cart', $cart);
      }else{
        Session::forget('cart');
      }

      return redirect()->route('product.shoppingCart');
    }

    public function getCart(Request $request)
    {
    	if(!Session::has('cart')){
    		return view('shop.shopping-cart');
    	}
    	$oldCart = Session::get('cart');
    	$cart = new Cart($oldCart);
    	return view('shop.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getCheckout()
    {
      if(!Session::has('cart')){
        return view('shop.shopping-cart');
      }
      $oldCart = Session::get('cart');
      $cart = new Cart($oldCart);
      $total = $cart->totalPrice;
      return view('shop.checkout', ['total' => $total]);

    }

    public function postCheckout(Request $request)
    {
      if(!Session::has('cart')){
        return redirect()->route('product.shoppingCart');
      }
      $oldCart = Session::get('cart');
      $cart = new Cart($oldCart);
      Stripe::setApiKey('sk_test_Taqx9LZsD0A4jbfEpmlm9y0n');
      try{
       $charge = Charge::create(array(
            "amount" => $cart->totalPrice * 100,
            "currency" => "usd",
            "source" => $request->input('stripeToken'), // obtained with Stripe.js
            "description" => "Test Charge"
          ));
       $order = new Order();
       $order->cart = serialize($cart);
       $order->address = $request->input('address');
       $order->name = $request->input('name');
       $order->payment_id = $charge->id;

       Auth::user()->orders()->save($order);
      } catch(\Exception $e){
          return redirect()->route('checkout')->with('error', $e->getMessage());
      }
      
      Session::forget('cart');
      return redirect()->route('product.index')->with('success', 'Successfully Purchased Products!');

    }
}
