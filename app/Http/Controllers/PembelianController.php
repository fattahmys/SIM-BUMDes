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
        ];
        return view('pages.inventaris.pembelian', $data);
    }

    public function insert(){
        
        $pembelian=  $this->PembelianModel->find(request()->nama_barang);
        $pembelian->master_barang;
        $data = [
            'master_barang_id'=>request()->nama_barang,
            'tgl'=>request()->tgl,
            'jumlah'=>request()->jumlah,
            'untung_per1'=>$pembelian->master_barang->harga_jual - $pembelian->master_barang->harga_beli ,
            'untung_tot'=>($pembelian->master_barang->harga_jual - $pembelian->master_barang->harga_beli) * request()->jumlah,
            'kredit'=>request()->harga_beli*request()->jumlah,                                                                                                                          
        ];
        
        

    

        Request()->validate([
            // 'nama_barang' => 'required|unique:master_barang,nama_barang|max:255',
            // 'tgl' => 'required',
            // 'harga_beli' => 'required|numeric',
            // 'harga_jual' => 'required|numeric',
            // 'jumlah' => 'required',
            // 'satuan' => 'required',
            
            
        ],
        [
            'nama_barang.required' => 'Data tidak boleh kosong!',
        ]);
        // $beli= DB::table('pembelian')
        // ->join('master_barang', 'pembelian.id_barang', '=', 'master_barang.id_barang')
        // ->select('pembelian.*', 'contacts.phone', 'orders.price')
        // ->get();

    // $tes = MasterbarangModel::where('id', '=' , request()->nama_barang)->first('harga_jual');
    
    $this->PembelianModel->insert($data);
    // Alert::success('Success Title', 'success Message');
    return redirect('master_barang')->with('success', 'Master barang berhasil ditambahkan.');
    }

    
}
