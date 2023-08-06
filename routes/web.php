<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChildController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[ChildController::class,'index'])->name('index');

Route::get('/form', function (){
    return view('form');

})->name('form');

Route::post('/form',[ChildController::class,'create'])->name('create');

Route::get('/edit/{id}',[ChildController::class,'edit'])->name('edit');
Route::put('/edit/{id}',[ChildController::class,'update'])->name('update');
Route::get('delete/{id}',[ChildController::class,'destroy'])->name('delete');


