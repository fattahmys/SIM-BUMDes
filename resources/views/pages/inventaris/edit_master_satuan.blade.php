@extends('layouts.master')
@section('content')
@section('title', 'SIMBUMDes - Edit Master Satuan')
 
<h1>Tambah Kategori</h1>
    <div class=" card card-body">
      <form action="{{route('update_master_satuan', $master_satuan->id)}}" method="POST">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label class="form-label">Satuan</label>
            <input name="satuan" type="text" class="form-control @error('satuan') is-invalid @enderror" id="satuan" value="{{$master_satuan->satuan}}" aria-describedby="emailHelp" placeholder="Masukkan Satuan">
            <div class="invalid-feedback">
            @error('satuan') {{$message}}@enderror
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Keterangan</label>
            <input name="keterangan" type="text" class="form-control @error('keterangan') is-invalid @enderror" id="satuan" value="{{$master_satuan->keterangan}}" aria-describedby="emailHelp" placeholder="Masukkan Keterangan">
            <div class="invalid-feedback">
            @error('keterangan') {{$message}}@enderror
            </div>
        </div>

           
           <button type="submit" class="btn btn-primary mt-3">Submit</button>
       </form>
          
    </div>
  </div>
    
@endsection
@push('custom-script')

@endpush