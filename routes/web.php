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
Route::get('/addbranch', [CollegeadminController::class, 'addBranch']);
Route::get('/addstate', [CollegeadminController::class, 'addState']);
Route::get('/addcourses', [CollegeadminController::class, 'addCourse']);
Route::get('/newcollege', [CollegeadminController::class, 'newCollege']);
Route::get('/newcoursesfees', [CollegeadminController::class, 'newCoursesfees']);
Route::get('/admissionprocess', [CollegeadminController::class, 'admissionProcess']);


Route::get('/importfile', [CollegeadminController::class, 'importCSVfile']);
Route::post('/upload/college', [CollegeadminController::class, 'import'])->name('import-file');
Route::get('/download/college', [CollegeadminController::class, 'exportCollege'])->name('export-college-details');

Route::get('/home', [CollegeadminController::class, 'homePage']);


Route::post('/savenewcollege', [CollegeadminController::class, 'saveCollege'])->name('add-college');
Route::post('/savenewbranch', [CollegeadminController::class, 'saveBranch'])->name('add-branch');
Route::post('/savenewstate', [CollegeadminController::class, 'saveState'])->name('add-state');
Route::post('/savenewcourse', [CollegeadminController::class, 'saveCourses'])->name('add-course');
Route::get('/collegedetail/{collegeurl}/', [CollegeadminController::class, 'detail']);
Route::get('/collegedetail/{collegeurl}/admission-process', [CollegeadminController::class, 'admissionProcess']);
Route::get('/collegedetail/{collegeurl}/course-fees', [CollegeadminController::class, 'newCoursesfees']);

Route::get('/collegedetail/{collegeurl}/facilities', [CollegeadminController::class, 'facilitie']);

Route::get('/collegedetail/{collegeurl}/hosteles', [CollegeadminController::class, 'hostel']);



Route::get('/index', [CollegeadminController::class, 'view']);
Route::get('/index/list/{state}', [CollegeadminController::class, 'view']);
Route::get('/index/list/{state}/{city}/', [CollegeadminController::class, 'view']);
Route::get('/index/{branch_name}', [CollegeadminController::class, 'view']);




Auth::routes();



Route::post('get-cities',[CollegeadminController::class,'getCities'])->name('get-cities');
Route::post('get-colleges',[CollegeadminController::class,'getColleges'])->name('get-colleges');
