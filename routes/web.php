<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main',[StoreController::class, 'index1'])->name('main');
Route::get('/store', [StoreController::class, 'index1'])->name('store');

Route::get('/home', [StoreController::class, 'index1'])->name('home.index1');
Route::get('/main1', [StoreController::class, 'index1']);
Route::get('/contact', [StoreController::class, 'index1']);


Route::get('/stores',[StoreController::class,'index'])->name('stores.index');
Route::get('/stores/create',[StoreController::class,'create'])->name('stores.create');
Route::post('/stores/',[StoreController::class,'store'])->name('stores.store');
Route::get('/stores/{post}',[StoreController::class, 'show'])->name('stores.show');
Route::get('/stores/{post}/edit',[StoreController::class, 'edit'])->name('stores.edit');
Route::patch('/stores/{post}',[StoreController::class,'update'])->name('stores.update');
Route::delete('/stores/{post}',[StoreController::class, 'destroy'])->name('stores.destroy');
