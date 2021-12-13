@extends('layouts.master')
@section('title', 'SIMBUMDes - Dashboard')
@section('content')
<h3>Dashboard</h3>
<h3 align="center">Selamat Datang di Administrator !</h3>
<div>
  @php
  $totalDebet=0;
  $totalLaba=0;
  $totalKredit=0;
  $sisa=0;
  foreach ($pembelian as $beli => $value) {
    $totalLaba += $value->untung_tot;
    $totalKredit += $value->kredit;
    $sisa += ($value->harga_jual-$value->harga_beli)*$value->stok;
                    };
  foreach ($debet as $Debet => $saldo) {
    $totalDebet += $saldo->jumlah;
  };
  @endphp
<div>
  <div class="row d-flex justify-content-center mt-5" align="center">
      <div class="col-sm-3">
          <div class="card text-white bg-danger mb-3" >
            <div class="card-header"><i class="fa fa-th-list"></i> Pengajuan Layanan</div>
          <div class="card-body">
            <h1 align="center">{{$pengajuanlayanan}}</h1>
            <p align="center">Pengajuan</p>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
          <div class="card text-white bg-success mb-3" >
              <div class="card-header"><i class="fa fa-edit"></i> Jumlah Postingan</div>
            <div class="card-body">
             <h1 align="center">{{$post}}</h1>
             <p align="center">Postingan</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
            <div class="card text-white bg-primary mb-3" >
              <div class="card-header"><i class="fa fa-th-list"></i> Pembinaan Petani</div>
            <div class="card-body">
             <h1 align="center">{{$pembinaanpetani}}</h1>
             <p align="center">Pendaftar</p>
            </div>
          </div>
        </div>
        
    </div>
</div>
<div class="row d-flex justify-content-center mt-5" align="center">
  <div class="col-sm-4">
      <div class="card text-white bg-warning mb-3" >
        <div class="card-header"><i class="fa fa-dollar"></i> Total Dana Masuk</div>
      <div class="card-body">
        <h1 align="center">Rp. {{number_format($totalDebet)}}</h1>
        <p align="center">Dana</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
      <div class="card text-white bg-info mb-3" >
          <div class="card-header"><i class="fa fa-line-chart"></i> Total Keuntungan</div>
        <div class="card-body">
         <h1 align="center">Rp. {{number_format($totalLaba-$sisa)}}</h1>
         <p align="center">Keuntungan</p>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
        <div class="card text-white bg-secondary mb-3" >
          <div class="card-header"><i class="fa fa-money"></i> Sisa Saldo</div>
        <div class="card-body">
         <h1 align="center">Rp. {{number_format($totalDebet-$totalKredit)}}</h1>
         <p align="center">Sisa</p>
        </div>
      </div>
    </div>
</div>
</div>


@endsection