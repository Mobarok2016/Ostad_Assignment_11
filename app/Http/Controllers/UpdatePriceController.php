<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpdatePriceController extends Controller
{
    public function index($id){
        $price= DB::table('add_products')->find($id);
        return view('Pages.UpdatePrice',compact('price'));
    }

    public function update(Request $request,$id){
       
       DB::table('add_products')->where('id',$id)->update([
        'price'=>$request->price
       ]);

       

       return redirect(route('show.products'));
        
    }
}
