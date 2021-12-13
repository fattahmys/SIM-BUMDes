@extends('layouts.master')
@section('content')
@section('title', 'SIMBUMDes - Tambah Master Satuan')
 
<h3>Tambah Satuan</h3>
    <div class=" card card-body">
      <form action="{{route('tambahmastersatuan')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">nama Satuan *(Contoh: kg, ml, krt, btl, dll )</label>
            <input name="satuan" type="text" class="form-control @error('satuan') is-invalid @enderror" id="satuan" aria-describedby="emailHelp" placeholder="Masukkan Satuan">
            <div class="invalid-feedback">
            @error('satuan') {{$message}}@enderror
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Keterangan *(Contoh: Kilogram, Mililiter, Karton, Botol, dll)</label>
            <input name="keterangan" type="text" class="form-control @error('keterangan') is-invalid @enderror" id="satuan" aria-describedby="emailHelp" placeholder="Masukkan Keterangan">
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