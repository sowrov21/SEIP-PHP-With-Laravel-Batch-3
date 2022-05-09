<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Exception;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){

        $categories = Category::all();
        return view('backend.categories.index', compact('categories'));
    }

    public function create(){
        return view('backend.categories.create');
    }


    public function store(Request $request){
       
       try{
        Category::create([
            'title' => $request->title ?? null,
            'description' => $request->description ?? null,
        ]);

        //$request->session()->flash('message', 'Category was successful Created!');


        return redirect()->route('category.index')->with('message', 'successful Created!');

       }catch(Exception $e){
            dd($e->getMessage());
       }
    }
}
