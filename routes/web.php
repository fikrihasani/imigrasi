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

// Halaman awal
Route::get('/', 'AppController@index');
// Authentication (login)
Auth::routes();
// untuk CRUD berita
Route::resource('berita', 'BeritaController');
// untuk CRUD biaya
Route::resource('biayaimigrasi', 'BiayaController');
// untuk CRUD Indeks Kepuasan
Route::resource('ikm', 'KepuasanController');
// untuk CRUD produk hukum
Route::resource('produkhukum', 'ProdukhukumController');
// untuk CRUD produk Galeri
Route::resource('galery', 'GaleriController');
// untuk CRUD pengaduan
Route::resource('pengaduan', 'PengaduanController');
// untuk cek pengaduan
Route::get('/cekpengaduan', 'PengaduanController@cek');
Route::post('/caripengaduan', 'PengaduanController@cari');
// untuk halaman admin
Route::get('/home', 'HomeController@index')->name('home');
// untuk CRUD kakanim
Route::resource('profil', 'KakanimController');
// untuk halaman tampilan depan
Route::get('/index', 'AppController@index')->name('index');
Route::get('/sejarah', 'AppController@sejarah')->name('sejarah');
Route::get('/kakanim', 'AppController@kakanim')->name('kakanim');
Route::get('/wni', 'AppController@wni')->name('wni');
Route::get('/wna', 'AppController@wna')->name('wna');
Route::get('/layananonline', 'AppController@layananonline')->name('layananonline');
Route::get('/biaya', 'AppController@biaya')->name('biaya');
Route::get('/beritautama', 'AppController@beritautama')->name('beritautama');
Route::get('/beritaimigrasi', 'AppController@beritaimigrasi')->name('beritaimigrasi');
Route::get('/contact', 'AppController@contact')->name('contact');
Route::get('/galeri', 'AppController@galeri')->name('galeri');
Route::get('/kepuasan', 'AppController@kepuasan')->name('kepuasan');
Route::get('/statistik', 'AppController@statistik')->name('statistik');
Route::get('/uu', 'AppController@uu')->name('uu');
Route::get('/presiden', 'AppController@presiden')->name('presiden');
Route::get('/pemerintah', 'AppController@pemerintah')->name('pemerintah');
Route::get('/menteri', 'AppController@menteri')->name('menteri');
Route::get('/beritautama/{berita}', 'AppController@detail')->name('detail utama');
Route::get('/beritaimigrasi/{berita}', 'AppController@detail')->name('detail imigrasi');
Route::get('/uu/{produk}', 'AppController@uraian')->name('uraian uu');
Route::get('/presiden/{produk}', 'AppController@uraian')->name('uraian presiden');
Route::get('/pemerintah/{produk}', 'AppController@uraian')->name('uraian pemerintah');
Route::get('/menteri/{produk}', 'AppController@uraian')->name('uraian menteri');
