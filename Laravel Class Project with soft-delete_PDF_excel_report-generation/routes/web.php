<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;


Route::get('/', function(){
    return view('home');
});

Route::get('/admin', function(){
    return view('backend.dashboard');
});


Route::prefix('product')->group(function(){
    Route::get('/', [ProductController::class, 'index'])->name('product.index');
    Route::get('/create', [ProductController::class, 'create'])->name('product.create');
    Route::get('/show/{id}', [ProductController::class, 'show'])->name('product.show');
    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');

    Route::get('/delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');

    Route::post('/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::post('/store', [ProductController::class, 'store'])->name('product.store');

     Route::get('/trashlist', [ProductController::class, 'trashList'])->name('product.trashlist');
    Route::get('/restore/{id}', [ProductController::class, 'restore'])->name('product.restore');
    Route::delete('/permanent_delete/{id}', [ProductController::class, 'delete'])->name('product.permanent_delete');
});


Route::prefix('category')->group(function(){
    Route::get('/', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
   
});


Route::prefix('color')->group(function(){
    Route::get('/', [ColorController::class, 'index'])->name('color.index');
    Route::get('/create', [ColorController::class, 'create'])->name('color.create');
    Route::post('/store', [ColorController::class, 'store'])->name('color.store');
   
});

Route::prefix('brand')->group(function(){
    
    Route::get('/', [BrandController::class, 'index'])->name('brand.index');
    Route::get('/create', [BrandController::class, 'create'])->name('brand.create');
    Route::get('/show/{id}', [BrandController::class, 'show'])->name('brand.show');
    Route::get('/edit/{id}', [BrandController::class, 'edit'])->name('brand.edit');

    Route::delete('/delete/{id}', [BrandController::class, 'destroy'])->name('brand.destroy');

    Route::post('/update/{id}', [BrandController::class, 'update'])->name('brand.update');
    Route::post('/store', [BrandController::class, 'store'])->name('brand.store');
   
});

// pdf 

Route::get('/product_pdf', [PdfController::class, 'productPdf'])->name('product.pdf');
Route::get('/product_html', [PdfController::class, 'productHtml'])->name('product.html');
































