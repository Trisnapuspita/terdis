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

Route::get('/coba', function(){
    return view('satu');
});

Route::get('/cobaa', function(){
    return view('dua');
});

Route::get('/cobaaa', function(){
    return view('tiga');
});

Route::get('/details/1', function(){
    return view('guru/landing/detailprogram');
});

Route::get('/details/2', function(){
    return view('guru/landing/detailevent');
});

Route::get('/daftar', function(){
    return view('guru/landing/daftar');
});

Route::get('/', 'TestimoniController@welcome');

Route::get('/tentangkami', 'TestimoniController@tentangkami');

Route::get('/kegiatan', 'BeritaController@index');
Route::get('/kegiatan/{id}', 'BeritaController@show');

Route::get('/bimbel', 'HomeController@bimbel');

Route::get('/kontak', 'HomeController@kontak');

Route::get('/info', function () {
    return view('guru/landing/info');
});

Route::get('/event', function () {
    return view('guru/landing/event');
});

Route::get('/program', function () {
    return view('guru/landing/program');
});

Route::get('/event/edit', function () {
    return view('guru/eventedit');
});

Route::get('/program/edit', function () {
    return view('guru/programedit');
});


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

Route::group(['middleware' => 'admin'], function() {
    Route::get('/admin/informasi', 'adminController@infohome');
    Route::get('/admin/berita', 'BeritaController@beritaadm');
    Route::get('/admin', 'adminController@dashboard');
    Route::delete('/admin/{id}', 'adminController@destroy');
    Route::delete('/admin/siswa/{id}', 'adminController@destroy_siswa');
    Route::delete('/admin/guru/{id}', 'adminController@destroy_guru');
    Route::resource('profil', 'ProfilController');
    Route::resource('misi', 'MisiController');
    Route::resource('testimoni', 'TestimoniController');
    Route::resource('kelas', 'KelasController');
    Route::get('/profil2', 'ProfilController@editprofil2');
    Route::put('/profil2', 'ProfilController@updateprofil2');
    Route::get('/visi', 'ProfilController@editvisi');
    Route::put('/visi', 'ProfilController@updatevisi');
    //melihat data guru dan siswa
    Route::get('/admin/data-guru', 'adminController@data_guru');
    Route::get('/admin/data-siswa', 'adminController@data_siswa');
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
    //guru digital - info
    Route::get('/gurudigital/info/create', 'GuruController@create_info');
    Route::post('/gurudigital/info', 'GuruController@store_info');
    //guru digital - Program
    Route::get('/gurudigital/program/create', 'GuruController@create_program');
    Route::post('/gurudigital/program', 'GuruController@store_program');
    Route::get('/gurudigital/programs', 'GuruController@program');
    //guru digital - Berita
    Route::get('/gurudigital/event/create', 'GuruController@create_event');
    Route::post('/gurudigital/event', 'GuruController@store_event');
    Route::get('/gurudigital/events', 'GuruController@event');
    //mata pelajaran
    Route::resource('matapelajaran', 'SubjectController');
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
    Route::get('/pengajar/soal/pilihan/{id}/show', 'SoalController@editpilihan');
    //create soal
    Route::get('/pengajar/soal/create', 'SoalController@create');
    Route::post('/pengajar/soal', 'SoalController@store');
    //edit soal
    Route::get('/soal/{id}/editnama', 'SoalController@editnama');
    Route::put('/soal/{id}', 'SoalController@updatenama');
    Route::delete('/soal/{id}', 'SoalController@destroy');
    //lihat nilai
    Route::get('lihatnilai', 'PengajarController@nilai');
    Route::get('lihatnilai/1', 'PengajarController@shownilai');
    //tiket
    Route::get('/tikett', function(){
        return view('info/tiket');
    });
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
    Route::get('/contacts', 'ContactsController@get');
    Route::get('/conversation/{id}', 'ContactsController@getMessagesFor');
    Route::post('/conversation/send', 'ContactsController@send');
    //
    Route::get('/tikett', function(){
        return view('info/tiket');
    });
    Route::get('/tiket', function(){
        return view('tiket');
    });
    Route::get('/lihatpendaftar', function(){
        return view('guru/lihatpendaftar');
    });
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
