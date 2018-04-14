<?php
use Illuminate\Support\Facades\DB;
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



Route::view('/', 'NewHome')->name('home');
Route::get('/Login', function(){
	return view('Login');
}) -> name('Login');

Route::post('/Check_Login', 'Login@check')->name('Check_Login');
Auth::routes();



