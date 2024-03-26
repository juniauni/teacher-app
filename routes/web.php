<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('auth\login');
});



Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/teacher', [HomeController::class, 'toTeacher'])->name('teacher');
Route::get('/add-teacher', [HomeController::class, 'addTeacher'])->name('add-teacher');
Route::post('/create-data-teacher', [HomeController::class, 'createDataTeacher']);
Route::get('/update-teacher/{id}', [HomeController::class, 'updateTeacher']);
Route::post('/update-data-teacher/{id}', [HomeController::class, 'updateDataTeacher']);
Route::get('/delete-data-teacher/{id}', [HomeController::class, 'deleteDataTeacher']);

