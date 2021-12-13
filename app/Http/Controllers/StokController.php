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

    public function stok(Request $request){
        // $keyword= $request->search;
        // $stok = MasterbarangModel::where('nama_barang', 'like', "%" . $keyword . "%")->get();
        $master_barang = MasterbarangModel::latest();
        if(request('search')) {
            $master_barang->where('nama_barang', 'like', '%' . request('search') . '%');
        }
        

        $data = [
            'master_barang' => $master_barang->get(),
            // 'master_barang' => $this->MasterbarangModel->get,
        ];
        return view('guest.pages.stok', $data);
    }
}
