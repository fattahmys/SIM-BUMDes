@extends('layouts.master')
@section('content')
@section('title', 'SIMBUMDes - Kelola Postingan')

<h3>All Post</h3>
<a href="{{route('newpost')}}" method="post" class="btn btn-primary mb-3 mt-2">Tambah Artikel</a>
    <div class=" card card-body table-responsive">
        <table class="table table-sm">
            <caption>{{ $post->links() }}</caption>
            <thead>
              <tr>
                  <th>NO</th>
                  <th>Judul</th>
                  <th>kategori</th>
                  <th width="30%">content</th>
                  <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1; ?>
              @foreach ($post as $Post =>$data)
              <?php $content = substr($data->content, 0, 100); ?>
              <tr>
                    <td>{{$no++}}</td>
                    <td>{{$data->title}}</td>
                    <td>{{$data->kategori}}</td>
                    <td width="1px">{!!$content!!} <a href="post/{{$data->id}}"><br> Read More...</a></td>
                    <td>
                        <a href="{{route('edit_post', $data->id)}}"  class="btn btn-sm btn-success">Edit</a>
                        <a href="#" data-id="{{$data->id}}" class="btn btn-sm btn-danger swal-confirm">
                          <form action="{{route('delete_post',$data->id)}}" id="delete{{$data->id}}" method="POST" >
                          @csrf
                          @method('delete')
                          </form> Delete </a>
                        <a href="post/{{$data->id}}" class="btn btn-sm btn-primary">Baca Artikel</a>
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
