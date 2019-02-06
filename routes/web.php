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
    return view('welcome');
});



// TEST ADAM WEBKU
Route::get('webKu/', function () {
    return "hi ADAM";
});

// test menggunakan variabel

$logic=function() {
  return "Hallo apakabar ADAM";
};
Route::get('webKu1',$logic);

// test multipage

Route::get('satu/page', function() {
return 'Yang ke Satu!';
});
Route::get('dua/page', function() {
return 'Yang ke Dua!';
});
Route::get('tiga/page', function() {
return 'Anda Hebat.......!';
});

// test menggunakan parameter
// tambah $ di return
Route::get('/buku/{judul}',function($judul) {
  return "Buku <b> {$judul} </b> adalah termasuk buku komputer.";
});

Route::get('/buku/{judul?}', function($judul=null)
{
if ($judul == null) return 'Buku tak berjudul.';
return "Buku <b>{$judul}</b> adalah termasuk buku komputer.";
});

// test langsung html
Route::get('/',function() {
  return '<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Coba laravel!</title>
</head>
<body>
<p>SELAMAT ANDA BELAJAR LARAVEL</p>
</body>
</html>';
});

Route::get('/view1',function(){
  return View::make('sederhana');

});

Route::get('segi-empat/inputSegiEmpat','SegiEmpatController@inputSegiEmpat')->name('segi-empat.inputSegiEmpat');
Route::post('segi-empat/hasil','SegiEmpatController@hasil')->name('segi-empat.hasil');
// route Kubus
Route::get('segi-empat/inputKubus','SegiEmpatController@inputKubus')->name('segi-empat.inputKubus');
Route::post('segi-empat/hasilKubus','SegiEmpatController@hasilKubus')->name('segi-empat.hasilKubus');
Route::resource('kota', 'KotaController');
