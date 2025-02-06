<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('student', [StudentController::class,'index']);


Route::get('student/create', [StudentController::class,'create']);
Route::post('student/create', [StudentController::class,'store']);


Route::get('student/update/{id}', [StudentController::class,'edit']);
Route::post('student/update', [StudentController::class,'update']);
Route::get('student/delete/{id}', [StudentController::class,'destroy_view']);
Route::post('student/delete', [StudentController::class,'destroy']);
Route::get("student/show/{id}",[StudentController::class,'show']);
Route::post("student/search",[StudentController::class,'search']);



Route::resource('product', ProductController::class);
