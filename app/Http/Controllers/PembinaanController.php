<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PembinaanpetaniModel;

class PembinaanController extends Controller
{
    public function __construct()
    {
        $this->PembinaanpetaniModel = new PembinaanpetaniModel();
    }
    public function index(){
        return view('guest.pages.pembinaan');
    }

    public function insert(){
        Request()->validate([
            'namakelompok' => 'required|unique:pembinaanpetani,namakelompok|max:255',
            'nohp' => 'required|unique:pembinaanpetani,nohp|numeric',
            'luaslahan' => 'required|unique:pembinaanpetani,luaslahan',
            'alamatlahan' => 'required|unique:pembinaanpetani,alamatlahan',
            
            
        ]);
            
            
            $data = [
                'namakelompok'=>request()->namakelompok,
                'nohp'=>request()->nohp,
                'alamatlahan'=>request()->alamatlahan,
                'luaslahan'=>request()->luaslahan,
                
        
            ];
            // dd($request->gambar);
    //    dd($data);

        DB::table('pembinaanpetani')->insert($data);
       
    // $this->PostModel->insert($data);
    return back()->with('success', 'Pendaftaran berhasil, tunggu konfirmasi selanjutnya.');
    }

    public function kelola_pembinaan(){
        $data = [
            'pembinaanpetani' => $this->PembinaanpetaniModel->allData(),
        ];
        return view('pages.kelola_pembinaan', $data);
    }
    public function delete($id)
    {
        DB::table('pembinaanpetani')->where('id',$id)->delete();
        return back();
    }
}
