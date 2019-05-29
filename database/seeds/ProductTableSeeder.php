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

        	'imagePath'=>'img/Wolee/1_2.png',
        	'description'=>'Classic gray hoodie with magic print, definitely',
        	'price'=>67
        ]);
       $product->save();

       $product = new \App\Product([

        	'imagePath'=>'img/Wolee/1_3.png',
        	'description'=>'New dark green hoodie on traditional technology',
        	'price'=>45
        ]);
       $product->save();

        $product = new \App\Product([

        	'imagePath'=>'img/Wolee/1_4.png',
        	'description'=>'Burgundy hoodie with beautiful brand lettering',
        	'price'=>70
        ]);
       $product->save();



        $product = new \App\Product([

        	'imagePath'=>'img/Wolee/1_5.png',
        	'description'=>'Unusual hoodie with a great 50 Cent print',
        	'price'=>60
        ]);
       $product->save();
       

        $product = new \App\Product([

        	'imagePath'=>'img/Wolee/sub.png',
        	'description'=>'Wonderful beige hoodie with a wonderful cat',
        	'price'=>90
        ]);
       $product->save();

    }
}
