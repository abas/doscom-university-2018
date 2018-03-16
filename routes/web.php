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

Route::get('/','HomeController@index')->name('root');

Auth::routes();
Route::post('/gender','PesertaController@getGender');

Route::get('/home', 'HomeController@index')->name('home');

Route::group([
    'prefix'        => 'admin',
    'middleware'    => ['auth','admin']
],function(){
    Route::get('/status', function(){
        return [
            'status' => 'admin'
        ];
    });
    // dashboard
    Route::get('/v65sv87s5rd6vts7vr6s5fdv7sf5v67sdv765sd6v7','DashboardController@index')->name('dashboard');

    // kelas
    Route::get('/ahr873yxcfb46tyc8264t28c4yn8ry8cryn7287r3d/{nama_kelas}','KelasController@show')->name('detail-kelas');

    // tutup kelas
    Route::get('/kelas/{nama_kelas}/ditutup','KelasController@tutupKelas')->name('tutup-kelas');
    // buka kelas
    Route::get('/kelas/{nama_kelas}/dibuka','KelasController@bukaKelas')->name('buka-kelas');
    // counter plus
    Route::get('/kelas/{id}/min/ghacbuygecf764gf4u6tfgcwcy4bgtcu','KelasController@counterMinus')->name('minCounter');
    Route::get('/kelas/{id}/plus/ghacbuygecf764gf4u6tfgcwcy4bgtcu','KelasController@counterPlus')->name('plusCounter');
    
    
    // pelunasan
    Route::get(
            '/r45ge5th4g6et4h6dvs4d1bvs51gb6sr5b62srb98s5r2b6sr5bs62bh5sr6t46h4dt6h/{peserta_id}/',
            'PesertaController@pelunasan'
        )->name('pelunasan');


    // peserta
    Route::group(['prefix'=>'peserta'],function(){
        Route::get('/jhgbjhvbcguygbvvjhbvbaevia/{id}/delete','PesertaController@deletePeserta')->name('delete-peserta');
    });

        
    // must admin
    Route::post('/peserta/{id}/bayar','PesertaController@pembayaran')->name('pembayaran');
    Route::get('/semua-kelas','KelasController@semuaKelas')->name('semua-kelas');

    // kontak humas
    Route::get('/humasdata','DashboardController@humasdata')->name('humasdata');
    Route::get('/humasdata/semuanomor','DashboardController@getNomorAll')->name('semuanomor');

});

Route::get('/daftar','PesertaController@getDaftar')->name('getDaftar');
Route::post('/daftar','PesertaController@postDaftar')->name('postDaftar');

Route::get('peserta/863476gf437f39f7384t6f3746ft6836f47/info','PesertaController@getInformation')->name('get-informasi-peserta');
Route::post('peserta/98624gf796t4g7962gft47962gtf726g/info','PesertaController@postInformation')->name('post-informasi-peserta');
Route::get('peserta/98624gf796{peserta_id}t4g7962gft47962gtf726g/info','PesertaController@showInformation')->name('show-info');