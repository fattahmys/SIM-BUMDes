<?php

namespace App\Http\Controllers;
use App\Models\PostModel;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __construct()
    {
        
        $this->PostModel = new PostModel();
    }
    public function index(){
        $data = [
            'post' => $this->PostModel->allData1(),
        ];
        return view('guest.content', $data);
        
    }
   
    
}
