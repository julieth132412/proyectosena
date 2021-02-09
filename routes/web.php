<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstructoresController;
use App\Http\Controllers\AprendicesController;
use App\Http\Controllers\FichaController;
use App\Http\Controllers\FormacionController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login.form_login');
});



Route::get('usuario',[AdminController::class,'index'])->name('admin.index');
Route::get('usuario/create',[AdminController::class,'create'])->name('admin.create');
Route::post('usuario',[AdminController::class,'store'])->name('admin.store');
Route::delete('usuario/{id}',[AdminController::class,'destroy'])->name('admin.destroy'); 
Route::get('usuario/edit/{id}',[AdminController::class,'edit'])->name('admin.edit');
Route::patch('usuario/update/{id}',[AdminController::class,'update'])->name('admin.update');
Route::get('usuario/{id}',[AdminController::class,'show'])->name('admin.show'); 



Route::get('instructores',[InstructoresController::class,'index'])->name('instructores.index');
Route::get('instructores/create',[InstructoresController::class,'create'])->name('instructores.create');
Route::post('instructores',[InstructoresController::class,'store'])->name('instructores.store');
Route::delete('instructores/{id}',[InstructoresController::class,'destroy'])->name('instructores.destroy'); 
Route::get('instructores/edit/{id}',[InstructoresController::class,'edit'])->name('instructores.edit');
Route::patch('instructores/update/{id}',[InstructoresController::class,'update'])->name('instructores.update');
Route::get('instructores/{id}',[InstructoresController::class,'show'])->name('instructores.show'); 

Route::get('aprendices',[AprendicesController::class,'index'])->name('aprendices.index');
Route::get('aprendices/create',[AprendicesController::class,'create'])->name('aprendices.create');
Route::post('aprendices',[AprendicesController::class,'store'])->name('aprendices.store');
Route::delete('aprendices/{id}',[AprendicesController::class,'destroy'])->name('aprendices.destroy'); 
Route::get('aprendices/edit/{id}',[AprendicesController::class,'edit'])->name('aprendices.edit');
Route::put('apr@endices/update/{id}',[AprendicesController::class,'update'])->name('aprendices.update');
Route::get('aprendices/{id}',[AprendicesController::class,'show'])->name('aprendices.show'); 
Route::get('aprendices/confirm/{id}',[AprendicesController::class,'confirm'] )->name('aprendices.confirm');

Route::get('ficha',[FichaController::class,'index'])->name('ficha.index');
Route::get('ficha/create',[FichaController::class,'create'])->name('ficha.create');
Route::post('ficha',[FichaController::class,'store'])->name('ficha.store');
Route::get('ficha/edit/{id}',[FichaController::class,'edit'])->name('ficha.edit');
Route::delete('ficha/{id}',[FichaController::class,'destroy'])->name('ficha.destroy'); 
Route::patch('ficha/update/{id}',[FichaController::class,'update'])->name('ficha.update');
Route::get('ficha/{id}',[FichaController::class,'show'])->name('ficha.show');
Route::get('ficha/confirm/{id}',[FichaController::class,'confirm'] )->name('ficha.confirm');

Route::get('formacion',[FormacionController::class,'index'])->name('formacion.index');
Route::get('formacion/create',[FormacionController::class,'create'])->name('formacioncreate');
Route::post('formacion',[FormacionController::class,'store'])->name('formacion.store');
Route::get('formacion/edit/{id}',[FormacionController::class,'edit'])->name('formacion.edit');
Route::patch('formacion/update/{id}',[FormacionController::class,'update'])->name('formacion.update');
Route::get('formacion/{id}',[FormacionController::class,'show'])->name('formacion.show'); 