<?php

use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
    
Route::get('dashboard',[ViewController::class,'dashboard'])->name('dashboard');
Route::get('slider',[ViewController::class,'slider'])->name('slider');
Route::get('service',[ViewController::class,'service'])->name('service');
Route::get('history',[ViewController::class,'history'])->name('history');
Route::get('visimisi',[ViewController::class,'visimisi'])->name('visimisi');
Route::get('profile',[ViewController::class,'profile'])->name('profile');
Route::get('structure',[ViewController::class,'structure'])->name('structre');
Route::get('condition',[ViewController::class,'condition'])->name('condition');
Route::get('benefit',[ViewController::class,'benefit'])->name('benefit');
Route::get('service-view',[ViewController::class,'serviceview'])->name('service.view');