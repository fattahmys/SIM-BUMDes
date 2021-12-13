<?php

namespace App\Http\Controllers;

use App\Models\MasterbarangModel;
use App\Models\MastersatuanModel;
use App\Models\PembelianModel;
use App\Models\PenjualanModel;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function __construct()
    {
        $this->MasterbarangModel = new MasterbarangModel();
        $this->MastersatuanModel = new MastersatuanModel();
        $this->PenjualanModel = new PenjualanModel();
    }

    public function index(){
        $data = [
            'master_barang' => $this->MasterbarangModel->allData(),
            'master_satuan' => $this->MastersatuanModel->allData(),
            'penjualan' => $this->PenjualanModel->get(),
        ];
        return view('pages.inventaris.penjualan', $data);
    }

    public function insert(){
        
        $pembelian=  PembelianModel::first();
        // dd($pembelian);
        // $barang->master_barang->harga_jual;
        Request()->validate([
            'nama_barang' => 'required|max:255',
            'tgl' => 'required',
            'jumlah' => 'required|numeric',
            // 'untung_per1' => 'required',
            // 'untung_tot' => 'required',
        ],
        [
            'nama_barang.required' => 'Tidak boleh kosong!',
            'tgl.required' => 'Tidak boleh kosong!',
            'jumlah.required' => 'Tidak boleh kosong!',
            'jumlah.numeric' => 'harus berisi angka!',
        ]);
        $barang=  MasterbarangModel::where('id', request()->nama_barang)->first();
        $data = [
            'master_barang_id'=>request()->nama_barang,
            'tgl'=>request()->tgl,
            'jumlah'=>request()->jumlah,
            'untung_per1'=> $barang->harga_jual - $barang->harga_beli ,
            'untung_tot'=> ($barang->harga_jual - $barang->harga_beli) * request()->jumlah,
                                                                                                                                  
        ];
        $stok_now=$barang->stok;
        $stok_new = $stok_now - request()->jumlah;
        if ($stok_new < 0) {
            return back()->with('message', "Jumlah stok tidak mencukupi untuk melakukan penjualan! Jumlah stok saat ini $stok_now");
        }else{
            $this->PenjualanModel->insert($data);
        }
        $j_keluar_now = $barang->jumlah_keluar;
        $j_keluar_new = $j_keluar_now + request()->jumlah;
        if ($stok_new < 0){
            // return back()->with('message', 'stok');
        }else{
            MasterbarangModel::where('id', request()->nama_barang)->update([
                'stok' => $stok_new,
                'jumlah_keluar' => $j_keluar_new,
            ]);
        }
    // Alert::success('Success Title', 'success Message');
    return redirect('penjualan')->with('success', 'Penjualan berhasil ditambahkan.');
    }
}
