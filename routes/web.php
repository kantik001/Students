<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', [\App\Http\Controllers\StudentController::class, 'index']);
Route::get('/students/store', [\App\Http\Controllers\StudentController::class, 'store']);
Route::get('/students/show', [\App\Http\Controllers\StudentController::class, 'show']);
Route::get('/students/update', [\App\Http\Controllers\StudentController::class, 'update']);
Route::get('/students/delete', [\App\Http\Controllers\StudentController::class, 'delete']);
