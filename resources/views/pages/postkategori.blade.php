@extends('layouts.master')
@section('content')
@section('title', 'SIMBUMDes - Post Kategori')

<h3>Kategori Postingan</h3>
<a href="{{route('tambahpostktr')}}" method="post" class="btn btn-primary mb-3 mt-2">Tambah Kategori</a>
    <div class=" card card-body table-responsive">
        <table class="table table-sm">
            {{-- <caption>List of users</caption> --}}
            <thead>
              <tr>
                  <th>NO</th>
                  <th>kategori</th>
                  <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1; ?>
              @foreach ($postkategori as $Postkategori =>$data)
              <tr>
                    <td>{{$no++}}</td>
                    <td>{{$data->kategori}}</td>
                    <td>
                      {{-- <a href="{{route('edit_kategoripost', $data->id)}}"  class="btn btn-sm btn-success">Edit</a> --}}
                        {{-- <a href="{{route('edit_post', $data->id)}}"  class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a> --}}
                        <a href="#" data-id="{{$data->id}}" class="btn btn-sm btn-danger swal-confirm" title="Delete">
                          <form action="{{route('delete_kategoripost',$data->id)}}" id="delete{{$data->id}}" method="POST" >
                          @csrf
                          @method('delete')
                          </form> <i class="fa fa-trash"></i> </a>
                       
                    </td>
                    
                </tr>
                @endforeach
            </tbody>
          </table>
          
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
    
@endpush

