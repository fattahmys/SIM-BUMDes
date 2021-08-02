<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PostkategoriModel extends Model
{
    public function allData()
    {
        return DB::table('postkategori')->get();
        
    }
    public function insert($data)
    {
        DB::table('postkategori')->insert($data);
       
    }
}
