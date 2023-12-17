<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddProductController extends Controller
{
    public function index(){
        return view('Pages.AddProducts');
    }

    public function addProducts(Request $request){

        $name = $request->name;
        $category= $request->category;
        $price= $request->price;
        $quantity= $request->quantity;

       $insert= DB::table('add_products')
        ->insert(['name'=>$name,'category'=>$category,'price'=>$price,'quantity'=>$quantity]);
        return redirect()->route('show.products');
    }
}
