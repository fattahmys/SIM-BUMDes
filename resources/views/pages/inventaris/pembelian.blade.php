@extends('layouts.master')
@section('content')
@section('title', 'SIMBUMDes - Post Kategori')
 
<h1>Tambah Kategori</h1>
    <div class=" card card-body">
      <form action="{{route('tambahmasterbarang')}}" method="POST">
        @csrf
        <div class="row g-2">
            <div class="col-md mb-3">
                <label class="form-label">nama Barang</label>
                <input name="nama_barang" type="text" class="form-control @error('nama_barang') is-invalid @enderror" id="nama_barang" aria-describedby="emailHelp" placeholder="Masukkan Nama Barang">
                <div class="invalid-feedback">
                @error('nama_barang') {{$message}}@enderror
                </div>
            </div>

            <div class="col-md mb-3">
                <label class="form-label">Harga Beli</label>
                <input name="harga_beli" type="text" class="form-control @error('harga_beli') is-invalid @enderror" id="harga_beli" aria-describedby="emailHelp" placeholder="Masukkan Harga Beli">
                <div class="invalid-feedback">
                @error('harga_beli') {{$message}}@enderror
                </div>
            </div>
        </div>
        <div class="row g-2">
            <div class="col-md mb-3">
                <label class="form-label">nama Barang</label>
                <input name="nama_barang" type="text" class="form-control @error('nama_barang') is-invalid @enderror" id="nama_barang" aria-describedby="emailHelp" placeholder="Masukkan Nama Barang">
                <div class="invalid-feedback">
                @error('nama_barang') {{$message}}@enderror
                </div>
            </div>

            <div class="col-md mb-3">
                <label class="form-label">Harga Beli</label>
                <input name="harga_beli" type="text" class="form-control @error('harga_beli') is-invalid @enderror" id="harga_beli" aria-describedby="emailHelp" placeholder="Masukkan Harga Beli">
                <div class="invalid-feedback">
                @error('harga_beli') {{$message}}@enderror
                </div>
            </div>
        </div>

           <button type="submit" class="btn btn-primary mt-3">Submit</button>
       </form>
          
    </div>
  </div>
    
@endsection
@push('custom-script')

@endpush