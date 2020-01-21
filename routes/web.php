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

// Route Basic
Route::get('Hallo', function()
{
    return 'Hallo Ini Aplikasi Laravel Pertama Saya'.
            '<br>Laravel is Magical Framework';
});

Route::get('hallo', function()
{
    return '<h1>Hallo</h1>'
    .'Selamat Datang Di Web App Saya<br>'
    .'Laravel Memang Keren';
});

//buat 5 buah profil pribadi
Route::get('profil/rosma', function()
{
    return 'Halo nama saya Rosmayani<br>'
          .'<br>Saya lahir di Bandung 16 April 2003<br>'
          .'<br>Saya tinggal di Komplek Bojong Malaka Indah Blok G5 no 27<br>'
          .'<br>Saya bersekolah di SMK ASSALAAM BANDUNG kelas XI RPL 1 jurusan Rekayasa Perangkat Lunak<br>'
          .'<br>Cita-cita saya menjadi Pengusaha<br>';
});

//Route Parameter
Route::get('biodata/{nama}', function($a)
{
    return 'Halo Ini Biodata Saya '.$a;
});

//Route Parameter Tugas
Route::get('biodata/{nama}/{alamat}/{umur}', function($a,$b,$c)
{
    return 'Nama Saya '.$a.
           '<br>Alamat Saya di '.$b.
           '<br>Umur Saya '.$c.' tahun';
});