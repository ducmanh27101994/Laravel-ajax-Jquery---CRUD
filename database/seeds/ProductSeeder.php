<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $product = new \App\Product();
        $product->name = 'Iphone X';
        $product->price = '100000';
        $product->color = 'Red';
        $product->desc = 'Con hang';
        $product->save();

        $product = new \App\Product();
        $product->name = 'Samsung Galaxy';
        $product->price = '200000';
        $product->color = 'Blue';
        $product->desc = 'Con hang';
        $product->save();

        $product = new \App\Product();
        $product->name = 'Oppo';
        $product->price = '300000';
        $product->color = 'Green';
        $product->desc = 'Het hang';
        $product->save();
    }
}
