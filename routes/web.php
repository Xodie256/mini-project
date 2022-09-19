<?php

use App\Http\Controllers\adminController;
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
// Route::get('/', function () {
//     return view('administrators.dashboard');
// });
// Route::get('/allcourses',[adminController::class,'all'])->name('allcourses');
// Route::get('/allfaculty',[adminController::class,'allf'])->name('allfaculty');
// Auth::routes();
// Route::get('/adminprofile',[adminController::class,'profile'])->name('admin-profile');
// Route::get('/adminc-edits',[adminController::class,'c_edits'])->name('c edits');
// Route::get('/adminf-edits',[adminController::class,'f_edits'])->name('f edits');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
