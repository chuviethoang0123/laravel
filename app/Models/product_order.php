<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product1 extends Model
{
    use HasFactory;

    protected $table = 'products_oders';

    protected $fillable = [
        'product_id',
        'oders_id',
        'quantity',
        'price',
       
    ];
}
