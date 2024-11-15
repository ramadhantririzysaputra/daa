<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    public function run()
    {
        Transaction::create([
            'product_id' => 1,
            'type' => 'in', // barang masuk
            'quantity' => 10,
            'total_price' => 50000000,
            'transaction_date' => now(),
            'supplier_name' => 'Supplier Elektronik',
        ]);

        Transaction::create([
            'product_id' => 2,
            'type' => 'out', // barang keluar
            'quantity' => 5,
            'total_price' => 7500000,
            'transaction_date' => now(),
            'supplier_name' => null,
        ]);
    }
}
