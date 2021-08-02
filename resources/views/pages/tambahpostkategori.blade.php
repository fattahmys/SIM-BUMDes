@extends('layouts.master')
@section('content')
@section('title', 'SIMBUMDes - Post Kategori')
 
<h1>Tambah Kategori</h1>
    <div class=" card card-body">
      <form action="{{route('insert_kategoripost')}}" method="POST">
        @csrf
            <div class="mb-3">
              <label class="form-label">Kategori</label>
              <input name="kategori" type="text" class="form-control @error('kategori') is-invalid @enderror" id="kategori" aria-describedby="emailHelp">
              <div class="invalid-feedback">
                @error('kategori') {{$message}}@enderror
                </div>
           <button type="submit" class="btn btn-primary mt-3">Submit</button>
       </form>
          
    </div>
  </div>
    
@endsection
@push('custom-script')

@endpush