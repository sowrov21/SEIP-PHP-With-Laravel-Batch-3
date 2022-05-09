<?php

namespace App\Http\Controllers;
use Exception;

use Carbon\Carbon;
use App\Models\Product;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Database\QueryException;


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

        //dd($request);
       $request->validate([
           'name' => 'required',   
           'category' => 'required',   
           'price' => 'required', 
           'unit' => 'required', 
           'description' => 'required'
                
         ]);


         try{

        $data = $request->except(['_token']);
        if($request->hasFile('image')) {

            //dd('ok');
           
           $data['image'] = $this->uploadImage($request->image, $request->name);

        }
       // dd($data);
        Product::create($data);
        return redirect()->route('product.index')->withMessage('successful Created!');

       }catch(QueryException $e){
           return redirect()->route('product.create')->withErrors($e->getMessage());
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
           'category' => 'required',   
           'price' => 'required', 
           'unit' => 'required', 
           'description' => 'required'
                
         ]);
  

         
         try{

          $data = $request->except(['_token']);

        if($request->hasFile('image')) {
           
            $product = Product::where('id', $id)->first();
            
            $this->unlink($product->image);

            $data['image'] = $this->uploadImage($request->image, $request->name);
 
        }

        Product::where('id', $id)->update($data);


        return redirect()->route('product.index')->withMessage('successful Updated!');
 

       }catch(QueryException $e){
           return redirect()->route('product.create')->withErrors($e->getMessage());
       }


     }

    public function destroy($id)    { 

         $product = Product::find($id);        
         $product->delete();        
         return redirect()->route('product.index')->with('success', 'Product deleted!');   
    
    }

        // image upload  function 


    private function uploadImage($file, $title)
    {
        
        //dd($file);
        $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());

        $file_name = $timestamp .'-'.$title. '.' . $file->getClientOriginalExtension();
        

        $pathToUpload = storage_path().'/app/public/products/';  // image  upload application save korbo

        if(!is_dir($pathToUpload)) {

            mkdir($pathToUpload, 0755, true);

        }

      Image::make($file)->resize(634,792)->save($pathToUpload.$file_name);

        return $file_name;
    }

        private function unlink($file)
    {
        $pathToUpload = storage_path().'/app/public/products/';
        if ($file != '' && file_exists($pathToUpload. $file)) {
            @unlink($pathToUpload. $file);
        }
    }


        // soft delete  methods 

    public function trashList(){
        
        $products = Product::onlyTrashed()->get();
        return view('backend.products.trashlist', compact('products'));

    }

    public function restore($id){
       
        $product = Product::onlyTrashed()->where('id', $id)->first();
        $product->restore();
        return redirect()->back()->withMessage('successful restored !');
    }

    public function delete($id){
        
        $product = Product::onlyTrashed()->where('id', $id)->first();
        $product->forceDelete();
        return redirect()->route('product.trashlist')->withMessage('Deleted from Database !');    


    }


   



}
