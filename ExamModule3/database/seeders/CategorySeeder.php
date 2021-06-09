<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Category();
        $product->id = 1;
        $product->name = "Cà phê";
        $product->description = "Danh mục cà phê";
        $product->save();

        $product = new Category();
        $product->id = 2;
        $product->name = "Sinh tố";
        $product->description = "Sinh tố";
        $product->save();
    }
}
