@extends('layouts.master')
@section('content')
@section('title', 'SIMBUMDes - Postiangan')

<h1>All Post</h1>
<a href="{{route('tambah_master_barang')}}" method="post" class="btn btn-primary mb-3 mt-2">Tambah Master Barang</a>
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
                  <th>Nama Barang</th>
                  <th>Harga Beli</th>
                  <th>Harga Jual</th>
                  <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1; ?>
              @foreach ($master_barang as $Master_barang =>$data)
              
              <tr>
                    <td>{{$no++}}</td>
                    <td>{{$data->nama_barang}}</td>
                    <td>Rp. {{number_format($data->harga_beli, 0, ',', '.' )}}</td>
                    <td>Rp. {{number_format($data->harga_jual, 0, ',', '.')}}</td>
                    <td>
                        <a href="#" data-id="{{$data->id}}" class="btn btn-sm btn-danger swal-confirm">
                          <form action="{{route('delete_master',$data->id)}}" id="delete{{$data->id}}" method="POST" >
                          @csrf
                          @method('delete')
                          </form> Delete </a>
                        
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
