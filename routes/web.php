<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormControl;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function(){
    return view('welcome');
});
Auth::routes();
Route::group(['middleware'=>['auth']], function(){
    Route::get('/home',[DashboardController::class,'index'])->name('dashboard');
});
Route::get('/form-d',[CourseController::class,'form_d'])->name('form-select');
Route::post('/course_add',[CourseController::class,'reg']);
Route::post('/reg2',[CourseController::class,'reg2']);
Route::post('/reg3',[CourseController::class,'reg3']);
Route::post('/reg4',[CourseController::class,'reg4']);
Route::post('/formdata',[CourseController::class,'feedback']);

Route::get('/form',[adminController::class,'form'])->name('form');
Route::post('/getform',[CourseController::class,'getform']);

Route::get('/allcourses',[adminController::class,'all'])->name('allcourses');
Route::get('/allfaculty',[adminController::class,'allf'])->name('allfaculty');
Route::get('/unit', [adminController::class,'units'])->name('add unit');
Route::get('/adminprofile',[adminController::class,'profile'])->name('admin-profile');
Route::get('/adminc-edits',[CourseController::class,'show'])->name('c edits');
Route::get('/adminf-edits',[adminController::class,'f_edits'])->name('f edits');
Route::get('/admind-edits',[adminController::class,'alld'])->name('d edits');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//forms
Route::get('/getreport',[ChartController::class,'getreport']);
Route::post('/report',[ChartController::class,'reports'])->name('report');
//Route::resource('/form',FormControl::class);