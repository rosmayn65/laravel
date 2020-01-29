<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CostumerController extends Controller
{
    public function index()
    {
        $costumer = \App\Costumer\Costumer::all();
        return $costumer;
    }

    public function show($id)
    {
        $costumer = \App\Costumer\Costumer::find($id);
        return $costumer;
    }

    public function store($code,$nama,$email,$country,$city,$address,$contact)
    {
        $costumer = new Costumer();
        $costumer->nis = $nis;
        $costumer->nama = $nama;
        $costumer->kelas = $kelas;
        $costumer->jml = $jml;
        $costumer->save();
        return $costumer;
    }

    public function edit($id,$nis,$nama,$kelas,$jml)
    {
        $costumer = new Costumer();
        $costumer->nis = $nis;
        $costumer->nama = $nama;
        $costumer->kelas = $kelas;
        $costumer->jml = $jml;
        $costumer->save();
        return $costumer;
    }

    public function delete($id,$nis,$nama,$kelas,$jml)
    {
        $costumer = Costumer::find($id);
        $costumer = $delete($nis,$nama,$kelas,$jml);
        return $costumer;
    }
}
