<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'type', // 'in' atau 'out'
        'quantity',
        'total_price',
        'transaction_date',
        'supplier_name', // atau penerima jika transaksi keluar
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}