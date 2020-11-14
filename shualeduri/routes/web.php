<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[\App\Http\Controllers\ApplicantController::class, 'index']);
Route::get('/{applicant}', [\App\Http\Controllers\ApplicantController::class, 'show'])->name('applicant.show');
Route::get('/{applicant}/edit', [\App\Http\Controllers\ApplicantController::class, 'edit'])->name('applicant.edit');
Route::put('/{applicant}/update', [\App\Http\Controllers\ApplicantController::class, 'update'])->name('applicant.update');
