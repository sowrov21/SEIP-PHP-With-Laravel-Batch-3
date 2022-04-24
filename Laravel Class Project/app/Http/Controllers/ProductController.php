<?php

namespace App\Http\Controllers;
use Exception;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $products = Product::all();
        return view('backend.products.index', compact('products'));
    }

    public function create(){
        return view('backend.products.create');
    }


    public function store(Request $request){
       
       try{
        Product::create([
            'name' => $request->name ?? null,
            'unit_price' => $request->unit_price ?? null,
            'in_stock' => $request->in_stock ?? null,
            'status' => $request->status ?? null,
        ]);


        return redirect()->route('product.index')->with('message', 'successful Created!');

       }catch(Exception $e){
            dd($e->getMessage());
       }
    }



}
