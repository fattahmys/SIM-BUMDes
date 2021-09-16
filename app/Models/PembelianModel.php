<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PembelianModel extends Model
{
    protected $table = "pembelian";
    // protected $guarded = ['id'];
 
    public function master_barang()
    {
    	return $this->belongsTo(MasterbarangModel::class);
    }

    public function allData()
    {
        return DB::table('master_barang')->get();
        
    }

    public function insert($data)
    {
        DB::table('pembelian')->insert([$data]);
       
    }
}
