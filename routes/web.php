<?php

use App\Models\Course;
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
    $courses = Course::all();
    $allPlaces = $courses->sum('max-places');
    $is_end = (count(\App\Models\Form::all())) == $allPlaces;
    return view('form',compact('is_end'));

});

Route::redirect('/','summer-university/inscription');

Route::get('/home',[\App\Http\Controllers\FormController::class,'show']);

Route::delete('/home/form/destroy/{Form}',
    [\App\Http\Controllers\FormController::class,'destroy'])->name('deleteForm');

Auth::routes();
