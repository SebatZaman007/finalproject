<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Product::create([
            'product_image'=>'p1.png',
            'product_name'=>'Beard Oil',
            'product_price'=>40,
            'product_quantity'=>10,
            'product_description'=>''

        ]);
        Product::create([
            'product_image'=>'p2.png',
            'product_name'=>'Beard Oil',
            'product_price'=>40,
            'product_quantity'=>10,
            'product_description'=>''

        ]);
        Product::create([
            'product_image'=>'p3.png',
            'product_name'=>'Beard Oil',
            'product_price'=>40,
            'product_quantity'=>10,
            'product_description'=>''

        ]);
        Product::create([
            'product_image'=>'p4.png',
            'product_name'=>'Beard Oil',
            'product_price'=>40,
            'product_quantity'=>10,
            'product_description'=>''

        ]);
    }
}
