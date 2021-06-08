<?php

use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/sendmail', 'SendEmailController@index')->name('mail.index');


Route::group(['middleware' => ['auth','checkRole:admin,user']], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard-index');

    // Crud Buku
    Route::post('/dashboard/create/buku', 'BukuController@store')->name('buku-create');
    Route::get('/dashboard/edit/buku/{id}', 'BukuController@edit')->name('buku-edit');
    Route::post('/dashboard/update/buku/{id}', 'BukuController@update')->name('buku-update');
    Route::get('/dashboard/hapus/buku/{id}', 'BukuController@destroy')->name('buku-hapus');
 
    // detail buku
    Route::get('/dashboard/detail/{id}', 'BukuController@show')->name('buku-show');

    // crud kategori
    Route::post('/dashboard/create/kategori', 'KategoriController@store')->name('kategori-create');
    Route::get('/dashboard/edit/kategori/{id}', 'KategoriController@edit')->name('kategori-edit');
    Route::post('/dashboard/update/kategori/{id}', 'KategoriController@update')->name('kategori-update');
    Route::get('/dashboard/hapus/kategori/{id}', 'KategoriController@destroy')->name('kategori-hapus');

    //crud rak buku
    Route::post('/dashboard/create/rak', 'RakBukuController@store')->name('rakbuku-create');
    Route::get('/dashboard/edit/rak/{id}', 'RakBukuController@edit')->name('rakbuku-edit');
    Route::post('/dashboard/update/rak/{id}', 'RakBukuController@update')->name('rakbuku-update');
    Route::get('/dashboard/hapus/rak/{id}', 'RakBukuController@destroy')->name('rakbuku-hapus');

    // Ulasan
    Route::post('/ulasan', 'UlasanController@store')->name('ulasan-create');

    // favorite Buku
    Route::get('/dashboard/favorit/buku', 'FavoritBukuController@index')->name('favorit-index');
    Route::post('/favorit', 'FavoritBukuController@store')->name('favorit-create');
    Route::get('/favorit/hapus/{id}', 'FavoritBukuController@destroy')->name('favorit-delete');
    
    Route::get('/newslatter', 'NewslatterController@index')->name('email-index');
    Route::post('/newslatter/all', 'NewslatterController@allUser')->name('newslatter-all-user');
    Route::post('/newslatter/one', 'NewslatterController@oneUser')->name('newslatter-one-user');
});

