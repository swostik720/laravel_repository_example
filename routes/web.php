<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/all-category',[CategoryController::class,'index']);

Route::get('/add-category',[CategoryController::class,'create']);
Route::post('/add-category',[CategoryController::class,'store']);

Route::get('/edit-category/{id}',[CategoryController::class,'edit']);
Route::post('/edit-category/{id}',[CategoryController::class,'update']);

Route::delete('/all-category/delete/{id}',[CategoryController::class,'destroy']);