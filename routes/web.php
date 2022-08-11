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


Route::get('/', [ContentController::class, 'index']);
Route::get('detail', [DetailController::class, 'detail']);
Route::get('blog', [BlogController::class, 'blog']);
Route::get('blogDetail', [BlogController::class, 'blogDetail']);
Route::get('add', [ContentController::class, 'add']);
Route::post('store', [ContentController::class, 'store']);
Route::post('editC', [ContentController::class, 'editC']);
Route::post('delC', [ContentController::class, 'delC']);
Route::get('admin', [ContentController::class, 'admin']);
Route::get('edit/{id}', [ContentController::class, 'edit']);
Route::any('detail/{id}/{name}/{category}', [ContentController::class, 'detail']);

