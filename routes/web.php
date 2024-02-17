<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
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


Route::get('/',);
  
Auth::routes();



Route::get('/',[PostController::class,'index'])->name('index');
Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::group(['middleware' => 'auth'], function () {

    Route::get('/admin/categories/create',[CategoryController::class,'create'])->name('categories.create');
    Route::post('/admin/categories/store',[CategoryController::class,'store'])->name('categories.store');

    Route::get('/admin/posts/create',[PostController::class,'create'])->name('posts.create');
    Route::post('/admin/posts/store',[PostController::class,'store'])->name('posts.store'); 

});


Route::get('/categories',[CategoryController::class,'index'])->name('categories.index');

Route::get('/categories/{category}',[CategoryController::class,'show'])->name('categories.show');

Route::get('/posts',[PostController::class,'index'])->name('posts.index');
Route::get('/posts/{post}',[PostController::class,'show'])->name('posts.show');