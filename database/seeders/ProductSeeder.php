<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $products = config('db');
        foreach ($products as $product) {
            $newProduct = new Product();
            $newProduct->thumb = $product['thumb'];
            $newProduct->name = $product['name'];
            $newProduct->type = $product['type'];
            $newProduct->weight = $product['weight'];
            $newProduct->description = $product['description'];
            $newProduct->save();
        }
    }
}
