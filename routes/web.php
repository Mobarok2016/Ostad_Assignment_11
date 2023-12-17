<?php

use App\Http\Controllers\AddProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SellProductsController;
use App\Http\Controllers\ShowProductsController;
use App\Http\Controllers\SoldController;
use App\Http\Controllers\UpdatePriceController;
use App\Http\Controllers\UpdateQuantityController;


Route::get('/', function () {
    return view('Layout.App');
});


Route::group(['prefix'=>'admin'],function(){
   
    // add products
    Route::get('/add',[AddProductController::class,'index'])->name('index.products');
    Route::post('/add',[AddProductController::class,'addProducts'])->name('add.products');

    // show products
    Route::get('show',[ShowProductsController::class,'show'])->name('show.products');

    // update price
    Route::get('update/{id}',[UpdatePriceController::class,'index']);
    Route::put('update/{id}',[UpdatePriceController::class,'update']);

    // update quantity
    Route::get('/quantity/{id}',[UpdateQuantityController::class,'index']);
    Route::get('/sold/{id}',[UpdateQuantityController::class,'update']);

    // sell history
    Route::get('/sell',[SellProductsController::class,'sell'])->name('sell.history');

  


});
