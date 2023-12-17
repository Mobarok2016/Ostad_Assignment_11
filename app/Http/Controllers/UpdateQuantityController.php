<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpdateQuantityController extends Controller
{
    public function index($id){
        $product = DB::table('add_products')->find($id);
        
        return view('Pages.UpdateQuantity',compact('product'));
    }

    public function update($id) {
        // Retrieve the product from the database
        $product = DB::table('add_products')->select('quantity')->where('id', $id)->first();
    
        // Check if the product exists
        if ($product) {
            // Decrease the quantity by 1
            $newQuantity = $product->quantity - 1;
    
            // Update the database record with the new quantity
            DB::table('add_products')->where('id', $id)->update(['quantity' => $newQuantity]);
    
             return redirect()->route('show.products');
        } else {
            return "Product not found.";
        }
    }
}
