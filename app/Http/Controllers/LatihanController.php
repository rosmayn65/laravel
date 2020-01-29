<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function halo()
    {
        return 'Hallo Nama Saya Rosmayani';
    }
    public function pertambahan()
    {
        $a = 10; $b = 5;
        $c = $a + $b;
        return "$a+$b=$c";
    }
    public function pengurangan()
    {
        $a = 20; $b = 20;
        $c = $a - $b;
        return "$a-$b=$c";
    }
    public function perkalian()
    {
        $a = 20; $b = 20;
        $c = $a * $b;
        return "$a*$b=$c";
    }
    public function pembagian()
    {
        $a = 20; $b = 20;
        $c = $a / $b;
        return "$a/$b=$c";
    }

//controller parameter
    public function tambah($a=0, $b=0)
    {
        $c = $a + $b;
        return "$a+$b=$c";
    }

    public function loop()
    {
        $data = [
            ['Nama'=>'Ndel'],
            ['Nama'=>'Iyang'],
            ['Nama'=>'Zyan'],
            ['Nama'=>'Kaka']
        ];
        //dd ($data)
        foreach($data as $val => $key)
        {
            echo "Nama:". $key['Nama']."<hr>";
        }
    }
    
    public function loop2(){
        $data = [
            ['Nama'=>'Rosma','Kelas'=>'XI RPL 1','uang_Jajan'=>60000],
            ['Nama'=>'Ilham','Kelas'=>'XII TPM 1','uang_Jajan'=>30000],
            ['Nama'=>'Ndel','Kelas'=>'XI RPL 1','uang_Jajan'=>20000],
            ['Nama'=>'Aghi','Kelas'=>'XII TPM 1','uang_Jajan'=>15000],
    ];
        foreach($data as $val => $key){
            echo 'Nama : '.$key['Nama']."<br>".
                 'Kelas : '.$key['Kelas']."<br>".
                 'Uang Jajan : Rp. '.$key['uang_Jajan']."<br>";
            if ($key['uang_Jajan'] > 55000) {
                $uangtbg = $key['uang_Jajan']*25/100;
                echo 'Uang Tabungan : Rp. '.$uangtbg.'<br>';
            }
            elseif ($key['uang_Jajan'] > 25000) {
                $uangtbg = $key['uang_Jajan']*15/100;
                echo 'Uang Tabungan : Rp. '.$uangtbg.'<br>';
            }
            elseif ($key['uang_Jajan'] > 10000) {
                $uangtbg = $key['uang_Jajan']*10/100;
                echo 'Uang Tabungan : Rp. '.$uangtbg.'<br>';
            }
            $sisa = $key['uang_Jajan']-$uangtbg;
            echo 'Sisa Uang : Rp. '.$sisa.'<hr>';
        }
    }

//uang jajan > 50000 -> uang tabungan 25%
//uang jajan > 25000 -> uang tabungan 15%
//uang jajan > 10000 -> uang tabungan 10%

public function loop3()
    {
        $data = [
            ['Nama'=>'Rosmayani', 'Agama'=>'Islam','Alamat'=>'Rancamanyar','Jenis_Kelamin'=>'Perempuan','Jabatan'=>'Staff','Jam_Kerja'=>'300'],
            ['Nama'=>'Ilham Ramdani', 'Agama'=>'Islam','Alamat'=>'Bojong Buah','Jenis_Kelamin'=>'Laki-Laki','Jabatan'=>'Manager','Jam_Kerja'=>'150'],
            ['Nama'=>'Yuni Yuliani', 'Agama'=>'Islam','Alamat'=>'Bojong Buah','Jenis_Kelamin'=>'Perempuan','Jabatan'=>'Sekretaris','Jam_Kerja'=>'100']
        ];
        foreach ($data as $val => $key) {
            echo 'Nama : '.$key['Nama'].'<br>'.
                 'Agama : '.$key['Agama'].'<br>'.
                 'Alamat : '.$key['Alamat'].'<br>'.
                 'Jenis Kelamin : '.$key['Jenis_Kelamin'].'<br>'.
                 'Jabatan : '.$key['Jabatan'].'<br>'.
                 'Jam Kerja : '.$key['Jam_Kerja'].'<br>';
            if ($key['Jabatan'] == "Manager") {
                $gaji = 5000000;
                echo 'Gaji : Rp. '.$gaji.'<br>';
            }
            elseif ($key['Jabatan'] == "Sekretaris") {
                $gaji = 3500000;
                echo 'Gaji : Rp. '.$gaji.'<br>';
            }
            elseif ($key['Jabatan'] == "Staff") {
                $gaji = 2500000;
                echo 'Gaji : Rp. '.$gaji.'<br>';
            }
            if ($key['Jam_Kerja'] >= 250) {
                $bonus = $gaji*10/100;
                echo 'Bonus : '.$bonus.'<br>';
            }
            elseif ($key['Jam_Kerja'] >= 200) {
                $bonus = $gaji*5/100;
                echo 'Bonus : '.$bonus.'<br>';
            }
            $gajibersih = $gaji+$bonus;
            $ppn = $gajibersih*2.5/100;
            echo 'PPN : Rp. '.$ppn.'<br>';
            $gajitotal = $gajibersih - $ppn;
            echo 'Total Gaji : Rp. '.$gajitotal.'<hr>';
        }
    }
}