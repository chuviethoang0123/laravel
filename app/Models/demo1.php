<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class demo1 extends Model
{
    use HasFactory;

    protected $table ='demo';
    protected $fillable =[
        'user_id',
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
