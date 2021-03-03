<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class product1 extends Model
{
   

    protected $table = 'orders';

    protected $fillable = [
        'code',
        'user_id',
        'address',
        'status',
        'total_price',
        
    ];
}
