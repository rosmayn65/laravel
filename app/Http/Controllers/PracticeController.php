<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tabungan;

class PracticeController extends Controller
{
    public function pass()
    {
        $data = "Ilham Ramdani";
        return view('latihan',compact('data'));
    }

    public function pass1()
    {
        $siswa = [
            ['nama'=>'Aghi','kelas'=>'RPL 2'],
            ['nama'=>'Gharra','kelas'=>'TPM 1'],
        ];
        // dd ($siswa);
        return view('latihan1',['data'=>$siswa]);
    }

    public function pass2()
    {
        $tabungan = Tabungan::all()->take(10);
        return view('latihan2',compact('tabungan'));
    }

    public function pass3($id)
    {
        $tabungan = Tabungan::findOrFail($id);
        return view('latihan3',compact('tabungan'));
    }
}