<?php

namespace App\Http\Controllers;

use App\Models\MasterbarangModel;
use App\Models\MastersatuanModel;
use App\Models\PembelianModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PembelianController extends Controller
{
    public function __construct()
    {
        $this->MasterbarangModel = new MasterbarangModel();
        $this->MastersatuanModel = new MastersatuanModel();
        $this->PembelianModel = new PembelianModel();
    }
    public function index(){
        $data = [
            'master_barang' => $this->MasterbarangModel->allData(),
            'master_satuan' => $this->MastersatuanModel->allData(),
            'pembelian' => $this->PembelianModel->get(),
        ];
        return view('pages.inventaris.pembelian', $data);
    }

    public function insert(){
        
        // $barang=  PembelianModel::first();
        // $barang->master_barang->harga_jual;
        $barang=  MasterbarangModel::where('id', request()->nama_barang)->first();
        // dd($barang);
        Request()->validate([
            'nama_barang' => 'required|unique:master_barang,nama_barang|max:255',
            'tgl' => 'required',
            'jumlah' => 'required|numeric',
            // 'satuan' => 'required',
        ],
        [
            'nama_barang.required' => 'Tidak boleh kosong!',
            'tgl.required' => 'Tidak boleh kosong!',
            'jumlah.required' => 'Tidak boleh kosong!',
            'jumlah.numeric' => 'harus berisi angka!',
            // 'satuan.required' => 'Tidak boleh kosong!',
        ]);
        $data = [
            'master_barang_id'=>request()->nama_barang,
            'tgl'=>request()->tgl,
            'jumlah'=>request()->jumlah,
            'untung_per1'=> $barang->harga_jual - $barang->harga_beli ,
            'untung_tot'=> ($barang->harga_jual - $barang->harga_beli) * request()->jumlah,
            'kredit'=> $barang->harga_beli * request()->jumlah,
        
        ];

    $this->PembelianModel->insert($data);
    // $barang=  MasterbarangModel::where('id', request()->nama_barang)->first();
    $stok_now=$barang->stok;
    $j_masuk_now = $barang->jumlah_masuk;
    $stok_new = $stok_now + request()->jumlah;
    $j_masuk_new = $j_masuk_now + request()->jumlah;
        MasterbarangModel::where('id', request()->nama_barang)->update([
            'stok' => $stok_new,
            'jumlah_masuk' => $j_masuk_new,
        ]);
        
                                          
    // Alert::success('Success Title', 'success Message');
    return redirect('pembelian')->with('success', 'Pembelian berhasil ditambahkan.');
    }

    
}
