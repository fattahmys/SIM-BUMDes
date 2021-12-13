@extends('layouts.master')
@section('content')
@section('title', 'SIMBUMDes - Laporan')
 
<h3>Laporan Pembelian</h3>
    <div class=" card card-body table-responsive">
      @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
                  @endif
                  <div>
                    <a href="{{route('cetak_laporan')}}"><button class="btn btn-success mb-3"><i class="fa fa-share"></i> Export Excel</button></a>
      
                </div>                 
<table class="table table-bordered table-sm">
            {{-- <caption>{{ $post->links() }}</caption> --}}
            <thead>
              
                <tr align="center">
                    <th rowspan="2">No</th>
                    <th rowspan="2">Nama Barang</th>
                    <th rowspan="2">Jml Brg</th>
                    <th rowspan="2">Jml Brg terjual</th>
                    <th colspan="2">Harga</th>
                    <th colspan="2">Sisa barang tak terjual</th>
                    <th colspan="2">Laba</th>
                    <th rowspan="2">Debet</th>
                    <th rowspan="2">Kredit</th>
                    <th rowspan="2">Saldo</th>
                </tr>
                <tr align="center">
                    <th >Beli</th>
                    <th>Jual</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Laba/1</th>
                    <th>Laba</th>
                </tr>
                
              
            </thead>
            <tbody>
                <?php
                    $totalLaba=0;
                    $totalKredit=0;
                    $jumTransaksi=0;
                    $totalDebet=0;
                    $sisa=0;
                    $tothtl=0;
                ?>
              <?php $no=1; ?>
              @foreach ($master_barang as $barang =>$data)
              <tr>
                <td>{{$no++}}</td>
                <td>{{$data->nama_barang}}</td>
                <td>{{number_format($data->jumlah_masuk)}}</td>
                <td>{{number_format($data->jumlah_keluar)}}</td>
                <td>Rp. {{number_format($data->harga_beli)}}</td>
                  <td>Rp. {{number_format($data->harga_jual)}}</td>
                  <td>{{$data->stok}}</td>
                  <td>Rp. {{number_format($data->stok*$data->harga_beli)}}</td>
                  <td>Rp. {{number_format($data->harga_jual-$data->harga_beli)}}</td>
                  <td>Rp. {{number_format(($data->harga_jual-$data->harga_beli)*$data->jumlah_masuk)}}</td>
                  <td></td>
                  <td>Rp. {{number_format($data->harga_beli*$data->jumlah_masuk)}}</td>
                  <td></td>
                  
                </tr>
                @php
                    $jumTransaksi += $data->harga_jual*$data->jumlah_keluar;
                    $sisa += ($data->harga_jual-$data->harga_beli)*$data->stok;
                    $tothtl += $data->stok*$data->harga_beli;
                @endphp
                @endforeach
                @php
                    foreach ($pembelian as $beli => $value) {
                      $totalLaba += $value->untung_tot;
                      $totalKredit += $value->kredit;
                    };
                    foreach ($debet as $Debet => $saldo) {
                      $totalDebet += $saldo->jumlah;
                    }
                    @endphp
                
                @foreach ($debet as $debet )
                  <tr class="text-center">
                    <td colspan="1"></td>
                    <td colspan="1">{{$debet->tgl}}</td>
                    <td colspan="6">Dari Bank {{$debet->nama_bank}}</td>
                    <td colspan="1"></td>
                    <td colspan="1"></td>
                    <td colspan="1">Rp. {{number_format($debet->jumlah)}}</td>
                    <td colspan="1"></td>
                    <td colspan="1"></td>
                  </tr>
                  @endforeach
                <tr class="fw-bolder text-center" >
                  <td colspan="1"></td>
                  <td  colspan="5"><b>Jumlah</b></td>
                  <td  colspan="1"></td>
                  <td  colspan="1"><b>{{number_format($tothtl)}}</b></td>
                  <td  colspan="1"></td>
                  <td  colspan="1"><b>Rp. {{number_format($totalLaba)}}</b> </td>
                  <td  colspan="1"></td>
                  <td class="text-danger" colspan="1"><b>Rp. {{number_format($totalKredit)}}</b></td>
                  <td class="text-danger" colspan="1"><b>Rp. {{number_format($totalDebet-$totalKredit)}}</b></td>
                </tr>
                
                <tr class="fw-bolder text-center" >
                  <td colspan="1"></td>
                  <td colspan="1"></td>
                  <td colspan="1"><b>Jumlah transaksi</td>
                  <td colspan="1"></td>
                  <td colspan="1"></td>
                  <td  colspan="1"><b>Rp. {{number_format($jumTransaksi)}}</b></td>
                  <td colspan="1"></td>
                  <td colspan="1"></td>
                  <td colspan="1"></td>
                  <td colspan="1"></td>
                  <td colspan="1"></td>
                  <td colspan="1"></td>
                  <td colspan="1"></td>
                </tr>
                <tr class="fw-bolder text-center" >
                  <td colspan="1"></td>
                  <td colspan="1"></td>
                  <td colspan="1"><b>Saldo awal</td>
                  <td colspan="1"></td>
                  <td colspan="1"></td>
                  <td colspan="1"></td>
                  <td colspan="1"></td>
                  <td colspan="1"></td>
                  <td colspan="1"></td>
                  <td colspan="1"></td>
                  <td  colspan="1"><b>Rp. {{number_format($totalDebet)}}</b></td>
                  <td colspan="1"></td>
                  <td colspan="1"></td>
                </tr>
                <tr class="fw-bolder text-center" >
                  <td colspan="1"></td>
                  <td colspan="1"></td>
                  <td colspan="1"><b>Laba jika laku sisa</td>
                  <td colspan="1"></td>
                  <td colspan="1"></td>
                  <td colspan="1"></td>
                  <td colspan="1"></td>
                  <td colspan="1"><b>Rp. {{number_format($sisa)}}</b></td>
                  <td colspan="1"></td>
                  <td colspan="1"></td>
                  <td colspan="1"></td>
                  <td colspan="1"></td>
                  <td colspan="1"></td>
                </tr>
                <tr class="fw-bolder text-center" >
                  <td colspan="1"></td>
                  <td colspan="1"></td>
                  <td colspan="1"><b>Laba bersih</td>
                  <td colspan="1"></td>
                  <td colspan="1"></td>
                  <td colspan="1"></td>
                  <td colspan="1"></td>
                  <td colspan="1"></td>
                  <td colspan="1"></td>
                  <td colspan="1"><b>Rp. {{number_format($totalLaba-$sisa)}}</b></td>
                  <td colspan="1"></td>
                  <td colspan="1"></td>
                  <td colspan="1"></td>
                </tr>
                <tr class="fw-bolder text-center" >
                  <td colspan="1"></td>
                  <td colspan="1"></td>
                  <td colspan="1"><b>Saldo akhir</td>
                  <td colspan="1"></td>
                  <td colspan="1"></td>
                  <td colspan="1"></td>
                  <td colspan="1"></td>
                  <td colspan="1"></td>
                  <td colspan="1"></td>
                  <td colspan="1"></td>
                  <td colspan="1"></td>
                  <td colspan="1"></td>
                  <td colspan="1"><b>Rp. {{number_format($totalDebet-$totalKredit)}}</b></td>
                </tr>
                
                </tbody>
          </table>
          
    </div>
  </div>
  </div>


@endsection
@push('custom-script')

@endpush