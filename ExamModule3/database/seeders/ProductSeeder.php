<?php

namespace Database\Seeders;

use App\Models\Product;
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
        $product = new Product();
        $product->id = 1;
        $product->name = "Cà phê nâu";
        $product->price = "20000";
        $product->images = NULL;
        $product->category_id  = 1;
        $product->save();


        $product = new Product();
        $product->id = 2;
        $product->name = "Sinh tố bơ";
        $product->price = "30000";
        $product->images = NULL;
        $product->category_id  = 2;
        $product->save();
    }
}
