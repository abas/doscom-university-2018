<?php

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
    return view('app-homepage');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group([
    'middleware'=>['auth','admin']
],function(){
    Route::get('/admin', function(){
        return [
            'status' => 'admin'
        ];
    });
});

Route::get('/daftar','PesertaController@getDaftar')->name('getDaftar');
Route::post('/daftar','PesertaController@postDaftar')->name('postDaftar');