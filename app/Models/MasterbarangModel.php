<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MasterbarangModel extends Model
{
    // protected $guarded = ['id'];
    protected $table = "master_barang";
    
    public function penjualan()
    {
        return $this->hasMany(PenjualanModel::class);
    }
    public function pembelian()
    {
        return $this->hasMany(PembelianModel::class);
    }


    public function master_satuan()
    {
    	return $this->hasMany(MastersatuanModel::class);
    }


    public function insert($data)
    {
        DB::table('master_barang')->insert($data);
       
    }
    public function allData()
    {
        return DB::table('master_barang')->get();
        
    }
    
    public function edit($id){
        return DB::table('master_barang')->where('id', $id)->first();

    }
}
