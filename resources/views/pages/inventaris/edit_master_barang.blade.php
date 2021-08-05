@extends('layouts.master')
@section('content')
@section('title', 'SIMBUMDes - Post Kategori')
 
<h1>Tambah Kategori</h1>
    <div class=" card card-body">
        @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
          @endif
      <form action="{{route('update_master_barang', $master_barang->id)}}" method="POST">
        @csrf
        @method('patch')
            <div class="mb-3">
                <label class="form-label">nama Barang</label>
                <input name="nama_barang" type="text" value="{{$master_barang->nama_barang}}" class="form-control @error('nama_barang') is-invalid @enderror" id="nama_barang" aria-describedby="emailHelp" placeholder="Masukkan Nama Barang">
                <div class="invalid-feedback">
                @error('nama_barang') {{$message}}@enderror
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Harga Beli</label>
                <input name="harga_beli" type="text" value="{{$master_barang->harga_beli}}" class="form-control @error('harga_beli') is-invalid @enderror" id="harga_beli" aria-describedby="emailHelp" placeholder="Masukkan Harga Beli">
                <div class="invalid-feedback">
                @error('harga_beli') {{$message}}@enderror
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Harga Jual</label>
                <input name="harga_jual" type="text" value="{{$master_barang->harga_jual}}" class="form-control @error('harga_jual') is-invalid @enderror" id="harga_jual" aria-describedby="emailHelp" placeholder="Masukkan Harga Jual">
                <div class="invalid-feedback">
                @error('harga_jual') {{$message}}@enderror
                </div>
            </div>
            
           <button type="submit" class="btn btn-primary mt-3">Submit</button>
       </form>
          
    </div>
  </div>
    
@endsection
@push('custom-script')

@endpush