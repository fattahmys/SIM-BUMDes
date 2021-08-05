<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function index(){
        return view('pages.inventaris.pembelian');
    }
}
