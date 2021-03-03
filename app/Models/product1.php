<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product1 extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'user_id',
        'code',
        'name',
        'price',
        'quantity',
        'description',
        'images',
        'rate',
        'weight',
        'status',
    ];
}
