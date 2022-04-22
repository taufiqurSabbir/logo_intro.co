<?php

use App\Http\Controllers\about;
use App\Http\Controllers\admin;
use App\Http\Controllers\contact;
use App\Http\Controllers\Home;
use App\Http\Controllers\login;
use App\Http\Controllers\products;
use App\Http\Controllers\registattion;
use App\Http\Controllers\service;
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

Route::get('/',[Home::class,'index'])->name('home');

Route::get('/about',[about::class,'index'])->name('about');


Route::get('/service', [service::class,'index'])->name('service');
Route::get('/product',[products::class,'index'])->name('product');

Route::get('/contact', [contact::class,'index'])->name('contact');

Route::get('/login/registration', [login::class,'index'])->name('login');

Route::get('/adminn', [admin::class,'index'])->name('admin');

Route::get('login',[login::class,'index'])->name('login');
Route::get('registration',[registattion::class,'index'])->name('registration');
Route::post('registration',[registattion::class,'registration'])->name('submit.registration');



Route::get('/email/verify/{email}/{token}',[registattion::class,'verifyUser']);

route::get('/test',[registattion::class,'testmail']);
route::get('/email/confirmation',[registattion::class,'mail_con'])->name('email.confirmation');

route::post('login',[login::class,'login'])->name('submit.login');

Route::get('logout',[login::class,'logout'])->name('logout');
