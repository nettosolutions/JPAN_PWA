<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('/dasboard_test', function () { return view('welcome');});
Route::get('/dashboard', function () { return view('app');});
Route::get('/userprofile', function () { return view('userprofile');});
Route::get('/users', function () { return view('users');});
Route::get('/hiring', function () { return view('hiring');});
Route::get('/employee', function () { return view('employee');});
Route::get('/job-description', function () { return view('job-description');});
Route::get('/forgot-password', function () { return view('reset');});
// Route::get('/', function () { return view('login');});
// Route::get('/language', function () { return view('language');});
// Route::get('/login');
Route::get('view', [LanguageController::class, 'view'])->name('view');
Route::get('language-change', [LanguageController::class, 'changeLanguage'])->name('changeLanguage');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::namespace('Auth')->group(function () {
    Route::get('/',[LoginController::class, 'show_login_form'])->name('login');
    Route::post('/',[LoginController::class, 'process_login'])->name('login.post');
    Route::get('/register',[LoginController::class, 'show_signup_form'])->name('register');
    Route::post('/register',[LoginController::class, 'process_signup']);
    Route::post('/logout',[LoginController::class, 'logout'])->name('logout');
  });
