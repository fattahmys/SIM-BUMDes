<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MasterbarangModel extends Model
{
    public function insert($data)
    {
        DB::table('master_barang')->insert($data);
       
    }
    public function allData()
    {
        return DB::table('master_barang')->get();
        
    }
}
