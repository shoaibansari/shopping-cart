<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
        	'title' => 'Harry Potter',
        	'image_path' => 'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	        tempor incididunt ut labore et dolore magna aliqua.',
        	'price' => 10
        ]);
        $product->save();
        $product = new \App\Product([
        	'title' => 'Harry Potter',
        	'image_path' => 'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	        tempor incididunt ut labore et dolore magna aliqua.',
        	'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
        	'title' => 'Harry Potter',
        	'image_path' => 'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	        tempor incididunt ut labore et dolore magna aliqua.',
        	'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
        	'title' => 'Harry Potter',
        	'image_path' => 'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	        tempor incididunt ut labore et dolore magna aliqua.',
        	'price' => 20
        ]);
        $product->save();

        $product = new \App\Product([
        	'title' => 'Harry Potter',
        	'image_path' => 'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	        tempor incididunt ut labore et dolore magna aliqua.',
        	'price' => 20
        ]);
        $product->save();
    }
}
