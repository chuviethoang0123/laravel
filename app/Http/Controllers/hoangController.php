<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\product1;

class hoangController extends Controller
{
    public function show($id)
    {
        return view('products', [
            'product1' => product1::findOrFail($id)
        ]);
    }
}
