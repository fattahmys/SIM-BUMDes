<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PostModel extends Model
{
    public function allData()
    {
        return DB::table('post')->orderBy('id', 'desc')->Paginate(5);
        
    }
    public function allData1()
    {
        return DB::table('post')->orderBy('id', 'desc')->Paginate(6);
        
    }
    public function insert($data)
    {
        DB::table('post')->insert($data);
       
    }
    public function detail($id)
    {
        return DB::table('post')->where('id', $id)->first();
    }
}
