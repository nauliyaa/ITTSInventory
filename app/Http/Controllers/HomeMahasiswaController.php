<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeMahasiswaController extends Controller
{
    public function index()
    {
    return view('BarangMahasiswa.index');
    }
    public function itemsa()
    {
    return view('BarangMahasiswa.item');
    }
}
