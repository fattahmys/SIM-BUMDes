@extends('layouts.master')
@section('content')
@section('title', 'SIMBUMDes - Pembinaan')

<h3>Pembinaan Petani</h3>
{{-- <a href="{{route('newpost')}}" method="post" class="btn btn-primary mb-3 mt-2">Tambah Artikel</a> --}}
    <div class=" card card-body table-responsive">
        <table class="table table-sm">
            {{-- <caption>{{ $post->links() }}</caption> --}}
            <thead>
              <tr>
                  <th>NO</th>
                  <th>Nama Kelompok</th>
                  <th>No</th>
                  <th>Luas Lahan</th>
                  <th>Alamat Lahan</th>
                  <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1; ?>
              @foreach ($pembinaanpetani as $PembinaanPetani =>$data)
              
              <tr>
                    <td>{{$no++}}</td>
                    <td>{{$data->namakelompok}}</td>
                    <td>{{$data->nohp}}</td>
                    <td>{{$data->luaslahan}}</td>
                    <td>{{$data->alamatlahan}}</td>
                    <td>
                        <a href="#" data-id="{{$data->id}}" class="btn btn-sm btn-danger swal-confirm" title="Delete">
                          <form action="{{route('delete_pembinaan',$data->id)}}" id="delete{{$data->id}}" method="POST" >
                          @csrf
                          @method('delete')
                          </form><i class="fa fa-trash"></i> </a>
                        
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
