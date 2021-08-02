<?php

namespace App\Http\Controllers;

use App\Models\PostkategoriModel;
use App\Models\PostModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function __construct()
    {
        $this->PostModel = new PostModel();
        $this->PostkategoriModel = new PostkategoriModel();
    }
    public function index(){
        $data = [
            'post' => $this->PostModel->allData(),
        ];
        return view('pages.post', $data);
    }
    public function newpost(){
        $data = [
            'postkategori' => $this->PostkategoriModel->allData(),
        ];
        return view('pages.newpost', $data);
    }
    public function insert(Request $request){
        Request()->validate([
            'title' => 'required|unique:post,title|max:255',
            'content' => 'required|unique:post,content',
            'gambar' => 'required|mimes:jpeg,png,jpg,gif,svg',
            
        ],
        [
            'title.required' => 'Data tidak boleh kosong!',
            'kategori.required' => 'Data tidak boleh kosong!',
            'content.required' => 'Data tidak boleh kosong!',
            ]);
            
            $imgName = $request->gambar->getClientOriginalName() . '-' . time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('image'), $imgName);
            $data = [
                'title'=>request()->title,
                'kategori'=>request()->kategori,
                'content'=>request()->content,
                'gambar'=>$imgName,
        
            ];
            // dd($request->gambar);
       

        DB::table('post')->insert($data);
       
    // $this->PostModel->insert($data);
    return redirect('post');
    }

    public function detail($id){
        $data = [
            'post' => $this->PostModel->detail($id),
        ];
        return view('guest.pages.berita', $data);
    
    }

    public function edit($id){
        
        $data = [
            'postkategori' => $this->PostkategoriModel->allData(),
            'post' => $this->PostModel->detail($id),
        ];
       
        return view('pages.editpost', $data);
    }

    public function update(Request $request, $id){
        DB::table('post')->where('id', $id)->update([
            'title' => $request->title,
            'kategori' => $request->kategori,
            'content' => $request->content,
        ]);
        return back();
        // dd($request->all());
    }

    public function delete($id)
    {
        DB::table('post')->where('id',$id)->delete();
        return back();
    }
    
    public function galery(){
        $data = [
            'post' => $this->PostModel->allData(),
        ];
        return view('pages.galery', $data);
    }
    }
    

