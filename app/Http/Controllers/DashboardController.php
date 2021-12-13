<?php

namespace App\Http\Controllers;

use App\Models\DashboardModel;
use App\Models\MasterbarangModel;
use App\Models\PembelianModel;
use App\Models\PenjualanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->PembelianModel = new PembelianModel();
        $this->PenjualanModel = new PenjualanModel();
        $this->MasterbarangModel = new MasterbarangModel();
    }

    public function index(){
        $data = [
            'debet' => DB::table('debet')->orderBy('tgl', 'asc')->get(),
            'pembelian' => $this->PembelianModel->orderBy('tgl', 'asc')->get(),
            'penjualan' => $this->PembelianModel->get(),
            'master_barang' => $this->MasterbarangModel->orderBy('jumlah_masuk', 'desc')->get(), 
            'pengajuanlayanan' => DB::table('pengajuanlayanan')->get()->count(),
            'pembinaanpetani' => DB::table('pembinaanpetani')->get()->count(),
            'post' => DB::table('post')->get()->count(),
        ];
        return view('pages.dashboard', $data);
    }

    public function laporan(){
        $data = [
            'debet' => DB::table('debet')->orderBy('tgl', 'asc')->get(),
            'pembelian' => $this->PembelianModel->orderBy('tgl', 'asc')->get(),
            'penjualan' => $this->PembelianModel->get(),
            'master_barang' => $this->MasterbarangModel->orderBy('jumlah_masuk', 'desc')->get(), 
        ];
        

        return view('pages.dashboard', $data);
    }
}
