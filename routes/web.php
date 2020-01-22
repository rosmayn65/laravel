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

//Tugas buat 5 buah profil pribadi
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

//Tugas Route Parameter
Route::get('biodata/{nama}/{alamat}/{umur}', function($a,$b,$c)
{
    return 'Nama Saya '.$a.
           '<br>Alamat Saya di '.$b.
           '<br>Umur Saya '.$c.' tahun';
});

//Route Optional Parameter
Route::get('name/{param?}', function($a="Kenedy")
{
    return 'Your Name Is '.$a;
});

//Tugas Route Optional Parameter
Route::get('pesan/{a?}/{b?}/{c?}', function ($eat=null, $drink=null, $hrg=null)
{
    if (isset($eat)) {
        $eat = "Anda Memesan $eat";
        echo $eat;
    }
    if (isset($drink)) {
        $drink = " & $drink";
        echo $drink;
    }
    if (isset($hrg)) {
        $hrg = " dengan harga Rp $hrg";
        echo $hrg;
    }
    if (!$eat && !$drink){
    return "Anda Belum Memesan Sesuatu";
    }
    if (isset($hrg)) {
        $size = " dengan harga Rp ".$hrg;
        echo "$size";
        if ($hrg <= 0) {
            echo " Harga Tidak Valid";
        }
        elseif ($hrg >= 25000) {
            echo "dapat size medium";
        }
        elseif ($hrg > 25000) {
            echo "dapat size small";
        }
    }
});

//Tugas Optional Parameter
Route::get('tni/{nama?}/{berat?}/{umur?}', function($nama=null, $bb=null, $umur=null)
{
    if (isset($nama)) {
        $nama = "Nama Anda : $nama <br>";
        echo $nama;
    }
    if (isset($bb)) {
        $v = " Berat Badan Anda : $bb kg<br>";
        echo $v;
    }
    if (isset($umur)) {
        $umur = " Umur Anda : $umur tahun<br>";
        echo $umur;
    }
    if (isset($bb)) {
    
        if ($bb >= 76) {
            echo " Anda Harus Turun Berat Badan";
        }
        else if ($bb >= 100) {
            echo "Berat Badan Anda Ideal";
        }
        else if ($bb >= 50) {
            echo "Naikkan Berat Badan Anda";
        }
    }
});