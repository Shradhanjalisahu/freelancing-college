<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollegeadminController;
use App\Http\Controllers\DashboardController;
//use App\Http\Controllers\HomeController;
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
//Route::get('/', [HomeController::class, 'index']);

//Route::get('get-more-users', 'HomeController@getMoreUsers')->name('users.get-more-users');




Route::get('/', [CollegeadminController::class, 'index']);



Auth::routes();
Route::get('/newcollege', [CollegeadminController::class, 'newCollege']);
Route::get('/home', [CollegeadminController::class, 'homePage']);


Route::post('/savenewcollege', [CollegeadminController::class, 'saveCollege'])->name('add-college');
Route::get('/collegedetail/{collegeurl}/', [CollegeadminController::class, 'detail']);



Route::get('/index', [CollegeadminController::class, 'view']);
Route::get('/index/{branch_name}', [CollegeadminController::class, 'view']);
Route::post('get-city-by-state', [CollegeadminController::class, 'getCity']);
Route::post('get-univercity-by-city', [CollegeadminController::class, 'getUnivercity']);


use App\Http\Controllers\FilterController;
Route::resource('user','App\Http\Controllers\FilterController');

  


    






  

  
Route::resource('backend','App\Http\Controllers\DashboardController'); 


Auth::routes();



Route::post('get-cities',[CollegeadminController::class,'getCities'])->name('get-cities');
Route::post('get-colleges',[CollegeadminController::class,'getColleges'])->name('get-colleges');
