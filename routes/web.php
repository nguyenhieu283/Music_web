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


Route::post('/registerUser', 'SignUp@register')->name('registerUser');
Route::view('/signup', 'SignUp')->name('SignUp');
Route::get('/Login', function () {
    return view('Login');
})->name('Login');
Route::get('/', 'MusicController@index')->name('home');
Route::post('/checklogin', 'Login@check')->name('Check_Login');
Route::get('/nghenhieu', 'CustomController@ngheNhieu')->name('NgheNhieu');
Route::view('/nghesi', 'NgheSi')->name('NgheSi');
Route::view('/quocgia', 'QuocGia')->name('QuocGia');
Route::view('/mv', 'MV')->name('MV');
Route::view('/theloai', 'TheLoai')->name('TheLoai');
Route::view('/vip', 'VIP')->name('VIP');

Route::get('nghenhieu/{country}', 'CustomController@ngheNhieu');
//Route::get('/demo', 'Login@demo')-> name('demo');

//Route::resource([
//    'music' => 'MusicController',
//    'mv' => 'MVController',
//    'national' => 'NationalController',
//    'single' => 'SingleController',
//    'type' => 'TypeController'
//]);
//Route::resource('insert', 'MusicController');

Auth::routes();



