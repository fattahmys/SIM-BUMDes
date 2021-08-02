@extends('layouts.master')
@section('content')
@section('title', 'SIMBUMDes - edit Postingan')

<style>
    .ck-editor__editable_inline {
        min-height: 400px;
    }
    </style>

<h1>Edit Post</h1>
<a href="{{route('newpost')}}" method="post" class="btn btn-primary mb-3 mt-2">Tambah Artikel</a>
    <div class=" card card-body table-responsive">
      <form action="{{route('update_post',$post->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" name="title" id="title" value="{{$post->title}}" placeholder="Title...">
          </div>
          <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Kategori</label>
              <select name="kategori"class="form-control" aria-label="Default select example" aria-placeholder="Kategori" id="kategori" @error('kategori') is-invalid @enderror>
                  {{-- <option selected> {{$post->kategori}}</option> --}}
                  @foreach($postkategori as $Postkategori =>$data)
                    <option>{{$data->kategori}}</option>
                  @endforeach
                </select>
          </div>
          <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Content</label>
              <textarea id="content" class="form-control ck-editor__editable ck-editor__editable_inline @error('content') is-invalid @enderror" name="content" rows="10" cols="50">
                  {{$post->content}}
                  
              </textarea>
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
$(".swal-confirm").click(function(e) {
  id= e.target.dataset.id;
  Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
    if (result.isConfirmed) {
      if (result.isConfirmed) {
                    $(`#delete${id}`).submit();
                    
                }
      Swal.fire(
        'Deleted!',
        'Your file has been deleted.',
        'success'
      )
    }
  })
})
  
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#content' ) )
        .catch( error => {
        console.error( error );
        } );
    // CKEDITOR.replace( 'content' );
  </script>
    
@endpush
