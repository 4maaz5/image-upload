<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\ImageController;
use App\Http\Models\Table;
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


Route::get('/', [ImageController::class, 'display'])->name('index');
Route::post('/', [ImageController::class, 'index']);
Route::get('/delete/{id}', [ImageController::class, 'destroy'])->name('delete');
route::get('view/{id}',[ImageController::class, 'show'])->name('view');
// Route::view('/post', 'post');
