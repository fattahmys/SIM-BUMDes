<?php

namespace App\Http\Controllers;

use App\Models\PengajuanlayananModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LayananController extends Controller
{
    public function __construct()
    {
        $this->PengajuanlayananModel = new PengajuanlayananModel();
    }
    public function  index(){
        return view('guest.pages.layanan');
    }

    public function insert(){
        Request()->validate([
            'nama' => 'required|unique:pengajuanlayanan,nama|max:255',
            'nohp' => 'required|unique:pengajuanlayanan,nohp|numeric',
            'isipesan' => 'required|unique:pengajuanlayanan,isipesan',
            'nik' => 'required|unique:pengajuanlayanan,nik|numeric',
            
            
        ]);
            
            
            $data = [
                'nama'=>request()->nama,
                'nohp'=>request()->nohp,
                'nik'=>request()->nik,
                'isipesan'=>request()->isipesan,
                
        
            ];
            // dd($request->gambar);
    //    dd($data);

        DB::table('pengajuanlayanan')->insert($data);
       
    // $this->PostModel->insert($data);
    return back()->with('success', 'Pengajuan layanan berhasil dikirim.');
    }
    public function kelola_pengajuanlayanan(){
        $data = [
            'pengajuanlayanan' => $this->PengajuanlayananModel->allData(),
        ];
        return view('pages.kelola_pengajuanlayanan',$data);
    }
    public function delete($id)
    {
        DB::table('pengajuanlayanan')->where('id',$id)->delete();
        return back();
    }
}
