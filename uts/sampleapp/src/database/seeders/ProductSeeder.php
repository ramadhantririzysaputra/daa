<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Laptop',
            'category' => 'Elektronik',
            'description' => 'Laptop untuk keperluan kantor dan personal',
            'price' => 5000000,
            'stock' => 20,
        ]);

        Product::create([
            'name' => 'Meja Kantor',
            'category' => 'Peralatan Kantor',
            'description' => 'Meja untuk tempat kerja kantor',
            'price' => 1500000,
            'stock' => 15,
        ]);
    }
}
