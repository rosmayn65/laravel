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
    
    public function loop2()
    {
        $dataa = [
            ['Nama'=>'Iyang', 'Kelas'=>'TPM 1','uang_jajan'=>9000],
            ['Nama'=>'Kaka', 'Kelas'=>'RPL 1','uang_jajan'=>15000],
            ['Nama'=>'Ndel', 'Kelas'=>'Akutansi 2','uang_jajan'=>20000],
            ['Nama'=>'Pacing', 'Kelas'=>'Perawat 3','uang_jajan'=>30000],
            ['Nama'=>'Alip', 'Kelas'=>'TKR 2','uang_jajan'=>80000]
        ];
        
        foreach($dataa as $val => $key)
        if ($key["uang_jajan"]>=50000) {
            $uangtbg = $key ['uang_jajan']*25/100;
            $total = $key ['uang_jajan']*$uangtbg;
        }
        elseif ($key["uang_jajan"]>=25000) {
            $uangtbg = $key ['uang_jajan']*15/100;
            $total = $key ['uang_jajan']*$uangtbg;
        }
        elseif ($key["uang_jajan"]>=10000) {
            $uangtbg = $key ['uang_jajan']*10/100;
            $total = $key ['uang_jajan']*$uangtbg;
        }
        else {
            $uangtbg = 0;
            $total = $key['uang_jajan'];
        }
        //dd ($data)
        
            echo "Nama :". $key['Nama'].
                 " Kelas :". $key['Kelas'].
                 " Uang_jajan :".$total,
                 " Uang_tabungan : ".$uangtbg,
                 " Total uang_jajan : ".$key['uang_jajan']. 
                 "<hr>";

    }

//uang jajan > 50000 -> uang tabungan 25%
//uang jajan > 25000 -> uang tabungan 15%
//uang jajan > 10000 -> uang tabungan 10%

public function loop3()
    {
        $data = [
            ['Nama'=>'Novi', 'Agama'=>'Islam','Alamat'=>'Bojong Buah','Jenis_Kelamin'=>'P','Jabatan'=>'Staff','Jam_Kerja'=>'300'],
            ['Nama'=>'Siti', 'Agama'=>'Islam','Alamat'=>'Bojong Buah','Jenis_Kelamin'=>'P','Jabatan'=>'Manager','Jam_Kerja'=>'150'],
            ['Nama'=>'Rika', 'Agama'=>'Islam','Alamat'=>'Bojong Buah','Jenis_Kelamin'=>'P','Jabatan'=>'Sekretaris','Jam_Kerja'=>'100']
        ];
        foreach($data as $val => $key)
        if ($key["Jam_Kerja"]>=250) {
            $bonus = $key ['Jam_Kerja']*10/100;
            $total = $key ['Jam_Kerja']*$bonus;
        }

        echo "Nama :". $key['Nama'].
             " Agama :". $key['Agama'].
             " Alamat :". $key['Alamat'].
             " Jenis Kelamin :". $key['Jenis_Kelamin'].
             " Jabatan :". $key['Jabatan'].
             " Jam Kerja :". $key['Jam_Kerja'].
             "<hr>";
    }
}