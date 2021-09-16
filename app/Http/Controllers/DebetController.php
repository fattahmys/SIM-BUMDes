<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DebetController extends Controller
{
    public function index(){
        $data=['debet'=>DB::table('debet')->get()];
        return view('pages.inventaris.debet', $data);
    }
    public function insert(){
        $data = [
            'nama_bank'=>request()->nama_bank,
            'tgl'=>request()->tgl,
            'jumlah'=>request()->jumlah,
        ];
        Request()->validate([
            'nama_bank' => 'required|max:255',
            'tgl' => 'required',
            'jumlah' => 'required|numeric',
            
        ],
        [
            'nama_bank.required' => 'Tidak boleh kosong!',
            'tgl.required' => 'Tidak boleh kosong!',
            'jumlah.required' => 'Tidak boleh kosong!',
            'jumlah.numeric' => 'harus berisi angka!',
            
        ]);
        DB::table('debet')->insert([$data]);
        return redirect('debet')->with('success', 'Debet berhasil ditambahkan.');
    }
    
}
