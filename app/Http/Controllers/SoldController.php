<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SoldController extends Controller
{
    public function sell(Request $request,$id)
    {
        // Update the quantity
        $oldQuantity = DB::table('add_products')->select('quantity')
        ->where('id',$id)->first();
       
        return $oldQuantity ;
    }
}
