<?php

namespace App\Http\Controllers;

use App\Models\PostkategoriModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoripostController extends Controller
{
    public function __construct()
    {
        $this->PostkategoriModel = new PostkategoriModel();
    }

    public function index(){
        $data = [
            'postkategori' => $this->PostkategoriModel->allData(),
        ];
        return view('pages.postkategori', $data);
    }
    
    public function tambahpostktr(){
        return view('pages.tambahpostkategori');
    }

    public function insert(){
        $data = [
            'kategori'=>request()->kategori,
            ];
        Request()->validate([
            'kategori' => 'required|unique:postkategori,kategori|max:255',
           
        ],
        [
            'kategori.required' => 'Data tidak boleh kosong!',
        ]);

      
    $this->PostkategoriModel->insert($data);
    // Alert::success('Success Title', 'success Message');
    return back();
    }

    public function delete($id)
    {
        DB::table('postkategori')->where('id',$id)->delete();
        return back();
    }

    public function edit($id){
        
        // $data = [
        //     'postkategori' => $this->PostkategoriModel->allData(),
        //     'post' => $this->PostModel->detail($id),
        // ];
       
        return view('pages.editkategoripost');
    }
}
