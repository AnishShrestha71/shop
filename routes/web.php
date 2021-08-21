<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[DashboardController::class,'index'])->name('home');
Route::get('/autocomplete',[DashboardController::class,'autocomplete'])->name('autocomplete');



Auth::routes();

Route::get('user/logout',[LoginController::class,'logout'])->name('user.logout');
Route::get('user/show',[ItemController::class,'show'])->name('user.add');
Route::post('user/add',[ItemController::class,'insert'])->name('item.add');
Route::get('edit/{item}',[ItemController::class,'edit'])->name('item.edit');
Route::put('edit/{item}',[ItemController::class,'update'])->name('item.update');
Route::get('delete/{item}',[ItemController::class,'delete'])->name('item.delete');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
