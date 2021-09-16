<?php

namespace App\Http\Controllers;

use App\Models\MasterbarangModel;
use App\Models\MastersatuanModel;
use App\Models\PembelianModel;
use Illuminate\Http\Request;

class StokController extends Controller
{
    public function __construct()
    {
        $this->MasterbarangModel = new MasterbarangModel();
    }
    public function index(){
        $data = [
            'master_barang' => $this->MasterbarangModel->get(),
        ];
        return view('pages.inventaris.stok', $data);
    }
}
