<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function barang(){
        return view('pages.inventaris.master_barang');
    }
}
