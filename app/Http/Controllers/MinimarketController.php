<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Minimarket;
class MinimarketController extends Controller
{
    public function passminimarket()
    {
    $minimarket = Minimarket::all();
    return view('minimarket',compact('minimarket'));
    }

    public function passmini($id)
    {
    $minimarket = Minimarket::findOrFail($id);
    return view('minimarket',compact('minimarket'));
    }
}
