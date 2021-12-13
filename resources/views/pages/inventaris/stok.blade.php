@extends('layouts.master')
@section('content')
@section('title', 'SIMBUMDes - Stok')
 
<h3>Stok Produk</h3>
    <div class="card card-body table-responsive">
        <table class="table table-bordered">
            {{-- <caption>{{ $post->links() }}</caption> --}}
            <thead>
              <tr align="center">
                  <th>NO</th>
                  <th>Nama Barang</th>
                  <th>Jumlah Stok</th>
                  <th>Satuan</th>
                  <th>Harga Beli</th>
                  <th>Harga Jual</th>
                  <th>Update at</th>
                  
              </tr>
            </thead>
            <tbody>
              <?php $no=1; ?>
              @foreach ($master_barang as $barang =>$data)
              
              <tr>
                    <td align="center">{{$no++}}</td>
                    <td>{{$data->nama_barang}}</td>
                    <td align="center">{{$data->stok}}</td>
                    <td align="center">{{$data->satuan}}</td>
                    <td>Rp. {{number_format($data->harga_beli, 0, ',', ',')}}</td>
                    <td>Rp. {{number_format($data->harga_jual, 0, ',', ',')}}</td>
                    <td>{{date('d-m-Y H:i:s', strtotime($data->updated_at))}}</td>
                    {{-- <td>Rp. {{number_format($data->pembelian->untung_per1, 0, ',', '.')}}</td>  --}}
                    
                     
                </tr>
                @endforeach
            </tbody>
          </table>
          
    </div>
  </div>


@endsection
@push('custom-script')

@endpush