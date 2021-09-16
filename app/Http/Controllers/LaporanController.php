<?php

namespace App\Http\Controllers;

use App\Models\MasterbarangModel;
use App\Models\MastersatuanModel;
use App\Models\PembelianModel;
use App\Models\PenjualanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function __construct()
    {
        $this->PembelianModel = new PembelianModel();
        $this->PenjualanModel = new PenjualanModel();
        $this->MasterbarangModel = new MasterbarangModel();
    }

    public function index(){
        $data = [
            'pembelian' => $this->PembelianModel->orderBy('tgl', 'asc')->get(),
        ];
        

        return view('pages.inventaris.laporan_pembelian', $data);
    }

    public function cetak_laporan(){
        $data = [
            'debet' => DB::table('debet')->orderBy('tgl', 'asc')->get(),
            'pembelian' => $this->PembelianModel->orderBy('tgl', 'asc')->get(),
            'penjualan' => $this->PembelianModel->get(),
            'master_barang' => $this->MasterbarangModel->orderBy('jumlah_masuk', 'desc')->get(), 
        ];
        return view('pages.inventaris.cetak_laporan', $data);
    }

    public function cetak_pembelian(){
        $data = [
            'pembelian' => $this->PembelianModel->orderBy('tgl', 'asc')->get(),
        ];
        return view('pages.inventaris.cetak_pembelian', $data);
    }

    public function cetak_penjualan(){
        $data = [
            'penjualan' => $this->PenjualanModel->orderBy('tgl', 'asc')->get(),
        ];
        return view('pages.inventaris.cetak_penjualan', $data);
    }

    public function penjualan(){
        $data = [
            'penjualan' => $this->PenjualanModel->orderBy('tgl', 'asc')->get(),
        ];
        

        return view('pages.inventaris.laporan_penjualan', $data);
    }

    public function laporan(){
        $data = [
            'debet' => DB::table('debet')->orderBy('tgl', 'asc')->get(),
            'pembelian' => $this->PembelianModel->orderBy('tgl', 'asc')->get(),
            'penjualan' => $this->PembelianModel->get(),
            'master_barang' => $this->MasterbarangModel->orderBy('jumlah_masuk', 'desc')->get(), 
        ];
        

        return view('pages.inventaris.laporan', $data);
    }
    
    

    
}
