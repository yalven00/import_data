<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StuffController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/index_import',[App\Http\Controllers\StuffsController::class,'index'])->name('index_import');
Route::get('/import_form',[App\Http\Controllers\StuffsController::class, 'import_form'])->name('import_form');
Route::post('/import_data',[App\Http\Controllers\StuffsController::class, 'import_data'])->name('import_data');