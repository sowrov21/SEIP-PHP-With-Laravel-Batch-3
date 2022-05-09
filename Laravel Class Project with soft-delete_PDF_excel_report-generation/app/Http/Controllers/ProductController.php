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

       $request->validate([
           'name' => 'required',   
           'price' => 'required', 
           'unit' => 'required', 
                
         ]);
       
       try{
        Product::create([
            'name' => $request->name ?? null,
            'price' => $request->price ?? null,
            'unit' => $request->unit ?? null
        ]);


        return redirect()->route('product.index')->with('message', 'successfully Created!');

       }catch(Exception $e){
            dd($e->getMessage());
       }
    }

    
    public function show($id){
       
       $product = Product::find($id);

       //$product = Product::where('id', $id)->first();
        
       return view('backend.products.show', compact('product'));

    }


    public function edit($id){
       
        $product = Product::find($id);
        //$product = Product::where('id', $id)->first();
        return view('backend.products.edit', compact('product'));

     }

    public function update(Request $request, $id){

         $request->validate([
           'name' => 'required',   
           'price' => 'required', 
           'unit' => 'required', 
                
         ]);
  

        Product::where('id', $id)->update([
            'name' => $request->name ,
            'price' => $request->price ,
            'unit' => $request->unit
        ]);

        return redirect()->route('product.index')->withMessage('successfully Updated!');
 

     }

    public function destroy($id)    { 

         $product = Product::find($id);        
         $product->delete();        
         return redirect()->route('product.index')->with('success', 'Product deleted!');   
    
    }



}
