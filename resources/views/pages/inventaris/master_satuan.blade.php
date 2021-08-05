@extends('layouts.master')
@section('content')
@section('title', 'SIMBUMDes - Postiangan')

<h1>All Post</h1>
<a href="{{route('tambah_master_satuan')}}" method="post" class="btn btn-primary mb-3 mt-2">Tambah Master Barang</a>
    <div class=" card card-body table-responsive">
      @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
                  @endif
        <table class="table table-sm">
            {{-- <caption>{{ $post->links() }}</caption> --}}
            <thead>
              <tr>
                  <th>NO</th>
                  <th>Satuan</th>
                  <th>keterangan</th>
                  <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1; ?>
              @foreach ($master_satuan as $Master_satuan =>$data)
              
              <tr>
                    <td>{{$no++}}</td>
                    <td>{{$data->satuan}}</td>
                    <td>{{$data->keterangan}}</td>
                    <td>
                        <a href="#" data-id="{{$data->id}}" class="btn btn-sm btn-danger swal-confirm">
                          <form action="{{route('delete_master_satuan',$data->id)}}" id="delete{{$data->id}}" method="POST" >
                          @csrf
                          @method('delete')
                          </form> Delete </a>
                        <a href="{{route('edit_master_satuan',$data->id)}}" data-id="{{$data->id}}" class="btn btn-sm btn-primary">edit</a>
                        
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
        $(`#delete${id}`).submit();
    }
  })
})
  
</script>
    
@endpush
