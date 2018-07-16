<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Shopping Cart index
Route::get('/', [
	'uses' => 'ProductController@getIndex',
	'as'   => 'product.index'
]);

//Add to cart btn route
Route::get('/add-to-cart/{id}', [
	'uses' => 'ProductController@getAddToCart',
	'as'   => 'product.addToCart'
]);

Route::get('/reduce/{id}', [
	'uses' => 'ProductController@getReduceByOne',
	'as'   => 'product.reduceByOne'
]);

Route::get('/remove/{id}', [
	'uses' => 'ProductController@getRemoveItem',
	'as'   => 'product.remove'
]);

//shopping cart route
Route::get('/shopping-cart', [
	'uses' => 'ProductController@getCart',
	'as'   => 'product.shoppingCart'
]);

//checkout route
Route::get('/checkout', [
	'uses' => 'ProductController@getCheckout',
	'as'   => 'checkout',
	'middleware' => 'auth'
]);

//checkout post route
Route::post('/checkout', [
	'uses' => 'ProductController@postCheckout',
	'as'   => 'checkout',
	'middleware' => 'auth'
]);


Route::group(['prefix' => 'user'], function(){
    
    //guest routes
	Route::group(['middleware' => 'guest'], function(){

		//sign up form get
		Route::get('/signup', [
			'uses' => 'UserController@getSignup',
			'as'   => 'user.signup'
		]);
		//sign up form post
		Route::post('/signup', [
			'uses' => 'UserController@postSignup',
			'as'   => 'user.signup'
		]);

		//sign in form get
		Route::get('/signin', [
			'uses' => 'UserController@getSignin',
			'as'   => 'user.signin'
		]);

		//sign in form post
		Route::post('/signin', [
			'uses' => 'UserController@postSignin',
			'as'   => 'user.signin'
		]);


	});

	//auth routes
    Route::group(['middleware' => ['auth']], function(){

		//user profile route
		Route::get('/profile', [
			'uses' => 'UserController@getProfile',
			'as'   => 'user.profile'
		]);

		//user logout route
		Route::get('/logout', [
			'uses' => 'UserController@getLogout',
			'as'   => 'user.logout'
		]);

    });

});
