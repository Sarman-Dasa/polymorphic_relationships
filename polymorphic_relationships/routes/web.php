<?php

use App\Http\Controllers\ManytomanyController;
use App\Http\Controllers\OnetomanyController;
use App\Http\Controllers\OnetooneController;
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
    return view('welcome');
});

//-----------------------------//one to one//---------------------------------------//

Route::get("doctor/{id}",[OnetooneController::class,'getDoctorData']);
Route::get("patient/{id}",[OnetooneController::class,'getPatientData']);


//-----------------------------//one to Many//---------------------------------------//
Route::get('getPostData/{id}',[OnetomanyController::class,'getPostData']);
Route::get('getVideoData/{id}',[OnetomanyController::class,'getVideoData']);

Route::get('getStudentData/{id}',[ManytomanyController::class,'getStudentData']);
Route::get('getTeacherData/{id}',[ManytomanyController::class,'getTeacherData']);