<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!


CARA PENULISAN 

1. view -> nama_file.blade.php
2. controller & model -> NamaController.php / NamaModel.php
3. route -> Route::get('data-admin', 'AdminController@index'), Route::post('data-anggota','AdminController@store')

    get multiple data -> public function index(){ blabla }, post -> store, put -> update(), delete -> delete(), find -> show()

    if(status == null){ } -> status ?? 'data gak ada'
    if(status == 'done'){ } -> if(status == 'done') runFunction(), {runFunction(); runUser(); }
    if(status == 'done'){}else{} -> status == 'done' ? 'ok' : 'belum'

    penamaan variable, $nama_user (jangan), $namaUser (ok)
|
*/

Route::get('/', function () {
    return view('admin.admin_login');
});

Route::match(['get','post'],'/admin','AdminController@login');

Auth::routes();
 
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']],function(){
    Route::get('/admin/dashboard','AdminController@dashboard');
    Route::get('/admin/settings','AdminController@settings');
    Route::get('/admin/check-pwd','AdminController@chkPassword');
    // Route::get('admin/dashboard/{type}','AdminController@dashboard');
    Route::match(['get','post'],'/admin/edit-profile/{id}','AdminController@editProfile');
    Route::match(['get','post'],'/admin/update-pwd','AdminController@updatePassword');

    //Kas Masuk Route (Admin dan Pengurus)
    Route::match(['get','post'],'/admin/add-kasMasuk','KasMasukController@addKasMasuk');
    Route::match(['get','post'],'/admin/edit-kasMasuk/{id}','KasMasukController@editKasMasuk');
    Route::match(['get','post'],'/admin/delete-kasMasuk/{id}','KasMasukController@deleteKasMasuk');
    Route::get('/admin/view-kasMasuk','KasMasukController@tampilKasMasuk');

     //Kas Masuk Route (Admin dan Pengurus)
     Route::match(['get','post'],'/admin/add-creditCard','CreditCardController@addCreditCard');
     Route::match(['get','post'],'/admin/edit-kasMasuk/{id}','KasMasukController@editKasMasuk');
     Route::match(['get','post'],'/admin/delete-kasMasuk/{id}','KasMasukController@deleteKasMasuk');
     Route::get('/admin/view-creditCard','CreditCardController@tampilCreditCard');

    //kas keluar Route (Admin dan Pengurus)
    Route::match(['get','post'],'/admin/add-kasKeluar','KasKeluarController@addKasKeluar');
    Route::match(['get','post'],'/admin/edit-kasKeluar/{id}','KasKeluarController@editKasKeluar');
    Route::match(['get','post'],'/admin/delete-kasKeluar/{id}','KasKeluarController@deleteKaskeluar');
    Route::get('/admin/view-kasKeluar','KaskeluarController@tampilKasKeluar');

     //Iuran Wajib Route (Admin dan Pengurus)
     Route::get('/admin/add-iuranWajib', 'IuranWajibController@tampilIuranWajib');
     Route::match(['get','post'],'/admin/add-iuranWajib','IuranWajibController@addIuranWajib');
     Route::post('/admin/add-iuranWajib', 'IuranWajibController@addIuranWajib');

    //  Route::match(['get','post'],'/admin/add-iuranWajib','IuranWajibController@addIuranWajib');
     Route::match(['get','post'],'/admin/edit-/{id}','IuranWajibController@editIuranWajib');
     Route::match(['get','post'],'/admin/delete-iuranWajib/{id}','IuranWajibController@deleteIuranWajib');
     Route::get('/admin/view-iuranWajib','IuranWajibController@tampilIuranWajib');

      //Iuran Anggota Route (Admin dan Pengurus)
     Route::get('/admin/tampil-iuranAnggota', 'IuranAnggotaController@tampilIuranAnggota');
     Route::get('/admin/tampil-addIuranAnggota', 'IuranAnggotaController@tampilAddIuranAnggota');
     Route::post('/admin/addIuranAnggota', 'IuranAnggotaController@AddIuranAnggota');

      Route::match(['post'],'/admin/add-iuranAnggota','IuranAnggotaController@addIuranAnggota');
      Route::match(['get','post'],'/admin/edit-/{id}','IuranAnggotaController@editIuranAnggota');
      Route::match(['get','post'],'/admin/delete-iuranAnggota/{id}','IuranAnggotaController@deleteIuranAnggota');
      Route::get('/admin/view-iuranAnggota','IuranAnggotaController@tampilIuranAnggota');

    //users management route (admin)
    Route::match(['get','post'],'/admin/add-user','UsersController@addUsers');
    Route::match(['get','post'],'/admin/edit-user/{id}','UsersController@editUsers');
    Route::match(['get','post'],'/admin/delete-user/{id}','UsersController@deleteUsers');
    Route::get('/admin/view-user','UsersController@tampilUsers');
    Route::get('/admin/delete-user-image/{id}','UsersController@deleteUsersImage');

    //Absensi Route (Admin dan Pengurus)
    Route::match(['get','post'],'/admin/add-absensi','AbsensiController@addAbsensi');
    Route::match(['get','post'],'/admin/edit-absensi/{id}','AbsensiController@editAbsensi');
    Route::match(['get','post'],'/admin/delete-absensi/{id}','AbsensiController@deleteAbsensi');
    Route::get('/admin/view-absensi','AbsensiController@tampilAbsensi');

    Route::get('/admin/view-laporan','laporanController@tampilLaporan');
    Route::get('/admin/kasMasuk','laporanController@export_pdf');
    Route::get('/admin/kasKeluar','laporanController@export_pdf_kasKeluar');
    Route::get('/admin/saldo','laporanController@export_pdf_saldo');
    Route::get('/admin/absensi','laporanController@export_pdf_absensi');
    Route::get('/admin/users','laporanController@export_pdf_users');
    Route::get('/admin/kasAnggota','laporanController@export_pdf_kasAnggota');

    Route::get('admin/chart/{type}','ChartController@makeChart');

});

Route::get('/logout','AdminController@logout');
