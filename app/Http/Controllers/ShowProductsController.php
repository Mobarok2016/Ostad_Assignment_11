<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowProductsController extends Controller
{
    public function show(){
       $productsData = DB::table('add_products')->select('id','name','category','price','quantity')->get();
       
       return view('Pages.ShowProducts',compact('productsData'));
       
    }
}
