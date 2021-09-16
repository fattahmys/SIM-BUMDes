<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PenjualanModel extends Model
{
    protected $table = "penjualan";
    
    public function master_barang()
    {
    	return $this->belongsTo(MasterbarangModel::class);
    }

    public function insert($data)
    {
        DB::table('penjualan')->insert([$data]);
       
    }
}
