<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\DetailController;
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
//admin routes
Route::get('add', [ContentController::class, 'add']);
Route::get('addBlog', [BlogController::class, 'addBlog']);
Route::post('storeBlog', [BlogController::class, 'storeBlog']);
Route::post('store', [ContentController::class, 'store']);
Route::post('editC', [ContentController::class, 'editC']);
Route::post('eBlog', [ContentController::class, 'eBlog']);
Route::post('delC', [ContentController::class, 'delC']);
Route::get('admin', [ContentController::class, 'admin']);
Route::get('products', [ContentController::class, 'Products']);
Route::get('signUp', [ContentController::class, 'signUp']);
Route::get('edit/{id}', [ContentController::class, 'edit']);
Route::get('editBlog/{id}', [ContentController::class, 'editBlog']);
Route::get('admin/blog', [BlogController::class, 'adminBlog']);

//user routes
Route::get('/', [ContentController::class, 'index']);
Route::get('detail', [DetailController::class, 'detail']);
Route::get('blog', [BlogController::class, 'blog']);
Route::get('contact', [ContentController::class, 'contact']);
Route::get('blogDetail/{id}/{name}', [BlogController::class, 'blogDetail']);
Route::any('detail/{id}/{name}/{category}', [ContentController::class, 'detail']);

