<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SellProductsController extends Controller
{
    public function sell(){
        $todaySales = DB::table('add_products')->whereDate('created_at', today())->sum('price');
        $yesterdaySales = DB::table('add_products')->whereDate('created_at', today()->subDay())->sum('price');
        $thisMonthSales = DB::table('add_products')->whereMonth('created_at', now()->month)->sum('price');
        $lastMonthSales = DB::table('add_products')->whereMonth('created_at', now()->subMonth())->sum('price');
        return view('Pages.SellHistory',compact('todaySales','yesterdaySales','thisMonthSales','lastMonthSales'));
    }
}
