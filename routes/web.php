<?php
use App\Post;   
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

//Akses Model Post
Route::get('/testmodel', function()
{
    $query = App\Post::all();
    return $query;
});

//Akses Model Id
Route::get('testmodel1', function()
{
    $query = App\Post::find(1);
    return $query;
});

//Akses Model Title
Route::get('testmodel2', function()
{
    $query = App\Post::where('title','like','%cepat nikah%')->get();
    return $query;
});

//Akses Mengubah Record (hapus semua isi function)
Route::get('testmodel3', function()
{
    $query = $post = App\Post::find(1);
             $post->title = "Ciri Keluarga Sakinah";
             $post->save();
    return $post;
});

//Akses Menghapus Record (hapus semua isi function)
Route::get('testmodel4', function()
{
    $post = App\Post::find(1);
    $post->delete();
    // check data di database
});

//Akses Menambah Record (hapus semua isi function)
Route::get('testmodel5', function()
{
    $post = new App\Post;
    $post->title = "7 Amalan Pembuka Jodoh";
    $post->content = "shalat malam, sedekah, puasa sunah, silaturahmi, senyum, doa, tobat";
    $post->save();
    return $post;
});

//Akses Menampilkan 3 Data OnlineShop
Route::get('onlineshop', function()
{
    $data = App\onlineshop::all()
    ->take(3);
    return $data;
});

//Akses 
Route::get('onlineshop/select', function()
{
    $data = App\onlineshop::select('namaProduk','jenisProduk', 'bahanProduk', 'varianWarna', 'ukuranProduk', 'kuantitasProduk', 'hargaProduk')->first();
    return $data;
});

//Akses 
Route::get('onlineshop/{namaProduk}/{jenisProduk}{bahanProduk}/{varianWarna}\{ukuranProduk}/{kuantitasProduk}/{hargaProduk}', function($namaProduk,$jenisProduk,$bahanProduk,$varianWarna,$ukuranProduk,$kuantitasProduk,$hargaProduk){
{
    $data = new App\onlineshop;
    $onlineshop->namaProduk = $namaProduk;
    $onlineshop->jenisProduk = $njenisProduk;
    $onlineshop->namaProduk = $namaProduk;
    $onlineshop->namaProduk = $namaProduk;
    $onlineshop->namaProduk = $namaProduk;
    $onlineshop->namaProduk = $namaProduk;
    $onlineshop->namaProduk = $namaProduk;
    $onlineshop->namaProduk = $namaProduk;
    $onlineshop->save();
    return $data;
}
});

//Route Latihan Controller
Route::get('latihan','LatihanController@halo');
Route::get('latihan-pertambahan','LatihanController@pertambahan');
Route::get('latihan-pengurangan','LatihanController@pengurangan');
Route::get('latihan-perkalian','LatihanController@perkalian');
Route::get('latihan-pembagian','LatihanController@pembagian');
Route::get('latihan-tambah/{a?}/{b?}','LatihanController@tambah');
Route::get('/data-1','LatihanController@loop');
Route::get('/data-2','LatihanController@loop2');
Route::get('/data-3','LatihanController@loop3');


//Route Tabungan
Route::get('tabungan','TabunganController@index');
Route::get('tabungan/{id}','TabunganController@show');
Route::get('tabungan-tambah/{nis}/{nama}/{kelas}/{jml}','TabunganController@store');
Route::get('tabungan-edit/{id?}/{nis}/{nama}/{kelas}/{jml}','TabunganController@edit');
Route::get('tabungan-delete/{id?}/{nis}/{nama}/{kelas}/{jml}','TabunganController@delete');

//Route Costumer
Route::get('costumer','CostumerController@index');
Route::get('costumer/{id}','CostumerController@show');
Route::get('costumer-tambah/{nis}/{nama}/{kelas}/{jml}','CostumerController@store');
Route::get('costumer-edit/{id?}/{nis}/{nama}/{kelas}/{jml}','CostumerController@edit');
Route::get('costumer-delete/{id?}/{nis}/{nama}/{kelas}/{jml}','CostumerController@delete');
