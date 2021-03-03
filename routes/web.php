<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
   
    return view('homepage', ['user' => auth()->user()]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/nnn', function () {
    return view('gretting', ['name' => 'James']);
});


Route::middleware(['auth' ,'name'])->group(function () {
    Route::get('/products/create', [ProductController::class, 'create']); 
    Route::post('/products', [ProductController::class, 'store']); 
    Route::get('/products', [ProductController::class, 'store']); 
        
});


Route::resource('products', ProductController::class)->except([
    'create' ,'store'
]);


Route::middleware(['auth'])->group(function () {
    Route::post('/orders', [orderController::class, 'store']);
});