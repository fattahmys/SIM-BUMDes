<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MastersatuanModel extends Model
{
    public function allData()
    {
        return DB::table('master_satuan')->get();
        
    }
    public function insert($data)
    {
        DB::table('master_satuan')->insert($data);
       
    }

    public function edit($id){
        return DB::table('master_satuan')->where('id', $id)->first();

    }
}
