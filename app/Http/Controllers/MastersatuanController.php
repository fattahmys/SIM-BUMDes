<?php

namespace App\Http\Controllers;

use App\Models\MastersatuanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MastersatuanController extends Controller
{
    public function __construct()
    {
        $this->MastersatuanModel = new MastersatuanModel();
    }

    public function index(){
        $data = [
            'master_satuan' => $this->MastersatuanModel->allData(),
        ];
        return view('pages.inventaris.master_satuan', $data);
    }

    public function satuan(){
        return view('pages.inventaris.tambah_master_satuan');
    }

    public function insert(){
        $data = [
            'satuan'=>request()->satuan,
            'keterangan'=>request()->keterangan,
            
            ];
        Request()->validate([
            'satuan' => 'required|unique:master_satuan,satuan|max:255',
            'keterangan' => 'required|unique:master_satuan,keterangan|max:255',
           
        ],
        [
            'satuan.required' => 'Data tidak boleh kosong!',
        ]);

      
    $this->MastersatuanModel->insert($data);
    // Alert::success('Success Title', 'success Message');
    return redirect('master_satuan')->with('success', 'Master barang berhasil ditambahkan.');
    }

    public function delete($id)
    {
        DB::table('master_satuan')->where('id',$id)->delete();
        return back()->with('success', 'Master barang berhasil dihapus.');;
    }

    public function edit($id){
        
        $data = [
            'master_satuan' => $this->MastersatuanModel->allData(),
            'master_satuan' => $this->MastersatuanModel->edit($id),
            
        ];
       
        return view('pages.inventaris.edit_master_satuan', $data);
    }

    public function update(Request $request, $id){
        DB::table('master_satuan')->where('id', $id)->update([
            'satuan' => $request->satuan,
            'keterangan' => $request->keterangan,
        ]);
        return redirect('master_satuan')->with('success', 'Master barang berhasil diupdate');
        // dd($request->all());
    }
}
