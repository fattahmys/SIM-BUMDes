<?php

namespace App\Http\Controllers;
use App\Models\PostModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function __construct()
    {
        
        $this->PostModel = new PostModel();
    }
    public function index(){
        $data = [
            'debet'=>DB::table('debet')->get(),
            'master_barang'=>DB::table('master_barang')->get(),
            'pembelian'=>DB::table('pembelian')->get(),
            'post' => $this->PostModel->allData1(),
        ];
        return view('guest.content', $data);
        
    }
   
    
}
