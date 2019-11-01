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

Route::get('/', 'TestimoniController@welcome');

Route::get('/tentangkami', 'TestimoniController@tentangkami');

Route::get('/kegiatan', 'BeritaController@index');
Route::get('/kegiatan/{id}', 'BeritaController@show');

Route::get('/bimbel', 'HomeController@bimbel');
// Route::get('/bimbel', function () {
//     return view('bimbel');
// });

Route::get('/kontak', 'HomeController@kontak');
// Route::get('/kontak', function () {
//     return view('kontak');
// });


Route::get('/daftar-bimbel', 'HomeController@daftar_bimbel');
//Route::get('/daftar-bimbel', function () {
  //  return view('daftarbimbel');
//});
Route::post('/daftar-bimbel', 'PendaftaranController@store');

Route::get('/sukses-daftar', 'HomeController@sukses_daftar');
// Route::get('/sukses-daftar', function () {
//     return view('suksesdaftar');
// });

Route::get('/contact-bimbel', 'HomeController@contact_bimbel');
// Route::get('/contact-bimbel', function () {
//     return view('contactbimbel');
// });
Route::post('/contact-bimbel', 'PertanyaanController@store');

Route::get('/sukses-contact', 'HomeController@sukses_contact');
// Route::get('/sukses-contact', function () {
//     return view('suksescontact');
// });

//Route::resource('beritas', 'BeritaController');
// /beritas belom dibuat masuk ke controller index
Route::group(['middleware' => 'admin'], function() {
    Route::get('/admin/informasi', 'adminController@infohome');
    Route::get('/admin/berita', 'BeritaController@beritaadm');
    Route::get('/admin', 'adminController@dashboard');
    Route::delete('/admin/{id}', 'adminController@destroy');
    Route::resource('profil', 'ProfilController');
    Route::resource('misi', 'MisiController');
    Route::resource('testimoni', 'TestimoniController');
    Route::resource('kelas', 'KelasController');
    Route::get('/profil2', 'ProfilController@editprofil2');
    Route::put('/profil2', 'ProfilController@updateprofil2');
    Route::get('/visi', 'ProfilController@editvisi');
    Route::put('/visi', 'ProfilController@updatevisi');
    //melihat data pendaftar
    Route::get('/admin/data-pendaftar', 'PendaftaranController@index');
    Route::get('/admin/data-pendaftar/{id}', 'PendaftaranController@show');
    //create berita
    Route::get('/beritas/create', 'BeritaController@create');
    Route::post('/beritas', 'BeritaController@store');
    //edit berita
    Route::get('/beritas/{id}/edit', 'BeritaController@edit');
    Route::put('/beritas/{id}', 'BeritaController@update');
    Route::delete('/beritas/{id}', 'BeritaController@destroy');
    //register
    Route::get('/register2', 'RegistrationController@create');
    Route::post('/register2', 'RegistrationController@store');
});
Route::group(['middleware' => 'pengajar'], function() {
    Route::get('/pengajar', 'PengajarController@dashboard');
    Route::get('/pengajar/materi', 'MateriController@materiadm');
    Route::get('/pengajar/soal', 'SoalController@viewadm');
    //create materi
    Route::get('/pengajar/create', 'MateriController@create');
    Route::post('/materi', 'MateriController@store');
    //edit materi
    Route::get('/materi/{id}/edit', 'MateriController@edit');
    Route::put('/materi/{id}', 'MateriController@update');
    Route::delete('/materi/{id}', 'MateriController@destroy');
    //masuk ke halaman soal
    Route::get('/pengajar/soal/pilihan/create/{id}', 'SoalController@createpg');   //create pg soal
    Route::post('/pengajar/soal/pilihan/{id}', 'SoalController@storepg');          //masih create
    Route::get('/pengajar/soal/pilihan/edit/{id}/{no}', 'PilihanController@edit');      //update pg
    Route::put('/pengajar/soal/pilihan/{id}/{no}', 'PilihanController@update');         //masih update
    Route::delete('/pengajar/soal/pilihan/delete/{id}/{no}', 'PilihanController@destroy'); //deletee pg
    Route::get('/pengajar/soal/pilihan/{id}', 'SoalController@showeditpilihan');
    //create soal
    Route::get('/pengajar/soal/create', 'SoalController@create');
    Route::post('/pengajar/soal', 'SoalController@store');
    //edit soal
    Route::get('/soal/{id}/editnama', 'SoalController@editnama');
    Route::put('/soal/{id}', 'SoalController@updatenama');
    Route::delete('/soal/{id}', 'SoalController@destroy');
});
Route::group(['middleware' => 'auth'], function() {
    Route::get('/materi', 'MateriController@index');
    Route::get('/materi/{id}', 'MateriController@show');
    Route::get('/soal', 'SoalController@index');
    Route::get('/soal/{id}', 'SoalController@show');
    Route::post('/soal/{idsoal}/{iduser}', 'UserController@nilai');
    Route::get('/nilai/{id}', 'UserController@shownilai');
    //online chat
    Route::get('/chat', 'HomeController@chat');
    // Route::get('/chat', function () {
    //     return view('chat');
    // });
    Route::get('/contacts', 'ContactsController@get');
    Route::get('/conversation/{id}', 'ContactsController@getMessagesFor');
    Route::post('/conversation/send', 'ContactsController@send');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
