<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
       public function index(){
        $brands = Brand::all();
        return view('backend.brands.index', compact('brands'));
    }

        public function create(){
        return view('backend.brands.create');
    }


    public function store(Request $request){

       $request->validate([
           'name' => 'required'
                
         ]);
       
       try{
        Brand::create([
            'name' => $request->name ?? null
        ]);


        return redirect()->route('brand.index')->with('message', 'successfully Created!');

       }catch(Exception $e){
            dd($e->getMessage());
       }
    }

    
    public function show($id){
       
       $brand = Brand::find($id);

       //$Brand = Brand::where('id', $id)->first();
        
       return view('backend.brands.show', compact('brand'));

    }


    public function edit($id){
       
        $brand = Brand::find($id);
        //$Brand = Brand::where('id', $id)->first();
        return view('backend.brands.edit', compact('brand'));

     }

    public function update(Request $request, $id){

         $request->validate([
           'name' => 'required'
                
         ]);
  

        Brand::where('id', $id)->update([
            'name' => $request->name 
        ]);

        return redirect()->route('brand.index')->withMessage('successfully Updated!');
 

     }

    public function destroy($id)    { 

         $Brand = Brand::find($id);        
         $Brand->delete();        
         return redirect()->route('brand.index')->with('success', 'Brand deleted!');   
    
    }



}
