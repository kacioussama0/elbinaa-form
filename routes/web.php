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

Route::get('/inscription', function () {
    return view('form');

});

Route::redirect('/','/inscription');

Route::get('/home',[\App\Http\Controllers\FormController::class,'show']);

Auth::routes();

