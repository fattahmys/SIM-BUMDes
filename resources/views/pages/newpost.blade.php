@extends('layouts.master')
@section('content')
@section('title', 'SIMBUMDes - Newpost')
<style>
  .ck-editor__editable_inline {
      min-height: 400px;
  }
  </style>
  
<h1>Postingan Baru</h1>
    <div class=" card card-body">
      <form action="{{route('insert_newpost')}}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="mb-3">
              <label class="form-label">Judul</label>
              <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="emailHelp">
              <div class="invalid-feedback">
                @error('title') {{$message}}@enderror
                </div>
            </div>
            <div class="mb-3">
              <label for="kategori" class="form-label">Kategori</label>
              <select name="kategori"class="form-control" aria-label="Default select example" id="kategori" @error('kategori') is-invalid @enderror">
                @foreach($postkategori as $Postkategori =>$data)
                  <option>{{$data->kategori}}</option>
                @endforeach
              </select>
              <div class="invalid-feedback">
                @error('kategori') {{$message}}@enderror
                </div>
            </div>
            <div class="mb-3">
              <label for="formFile" class="form-label">Default file input example</label>
              <input class="form-control" type="file" id="formFile" name="gambar">
            </div>
            <div>
              <label class="form-label">Isi Arikel</label>
                <textarea id="content" class="form-control ck-editor__editable ck-editor__editable_inline @error('content') is-invalid @enderror" name="content" rows="10" cols="50"></textarea>
                <div id="validationServer03Feedback" class="invalid-feedback">
                  @error('content') {{$message}}@enderror
                  </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
          </form>
          
    </div>
  </div>
    
@endsection
@push('custom-script')
<script>
  ClassicEditor
      .create( document.querySelector( '#content' ) )
      .catch( error => {
      console.error( error );
      } );
  // CKEDITOR.replace( 'content' );
</script>
 
@endpush