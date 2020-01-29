<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tabungan;

class TabunganController extends Controller
{
    public function index()
    {
        $tabungan = Tabungan::all();
        return $tabungan;
    }

    public function show($id)
    {
        $tabungan = Tabungan::find($id);
        return $tabungan;
    }

    public function store($nis,$nama,$kelas,$jml)
    {
        $tabungan = new Tabungan();
        $tabungan->nis = $nis;
        $tabungan->nama = $nama;
        $tabungan->kelas = $kelas;
        $tabungan->jml = $jml;
        $tabungan->save();
        return $tabungan;
    }

    public function edit($id,$nis,$nama,$kelas,$jml)
    {
        $tabungan = new Tabungan();
        $tabungan->nis = $nis;
        $tabungan->nama = $nama;
        $tabungan->kelas = $kelas;
        $tabungan->jml = $jml;
        $tabungan->save();
        return $tabungan;
    }

    public function delete($id,$nis,$nama,$kelas,$jml)
    {
        $tabungan = Tabungan::find($id);
        $tabungan = $delete($nis,$nama,$kelas,$jml);
        return $tabungan;
    }
}
