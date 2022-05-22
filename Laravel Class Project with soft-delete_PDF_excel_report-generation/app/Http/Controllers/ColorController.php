<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function index(){

        $colors = Color::all();
        return view('backend.colors.index', compact('colors'));
    }

    public function create(){
        return view('backend.colors.create');
    }


    public function store(Request $request){
       
       try{
        Color::create([
            'name' => $request->name ?? null
        ]);


        return redirect()->route('color.index')->with('message', 'successful Created!');

       }catch(QueryException $e){
            dd($e->getMessage());
       }
    }
}
