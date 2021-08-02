@extends('guest.index')
@section('title', 'Bumdes-Pembinaan')
@section('content')
<div class="mt-5">
<br>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                Pengajuan Layanan
            </div>
            <div class="card-body">
                <h5 class="card-title text-center">Pengajuan Layanan</h5>
                <p class="card-text text-center text-info"> <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#layanan">
                    Pelajari lebih lanjut disini 
                  </button></p>
                  
                  @if(session()->has('success'))
                  <div class="alert alert-success">
                      {{ session()->get('success') }}
                  </div>
                    @endif
                    
                <form action="{{route('insert_pengajuanlayanan')}}" method="POST">
                    @csrf
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                          <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama">
                          <div class="invalid-feedback">
                            @error('nama') {{$message}}@enderror
                            </div>
                        </div>
                      </div>

                      
                      <div class="mb-3 row">
                        <label for="nohp" class="col-sm-2 col-form-label">No Hp</label>
                        <div class="col-sm-10">
                          <input type="text" name="nohp" class="form-control @error('nohp') is-invalid @enderror" id="nohp">
                          <div class="invalid-feedback">
                            @error('nohp') {{$message}}@enderror
                            </div>
                        </div>
                      </div>

                      <div class="mb-3 row">
                        <label for="nik" class="col-sm-2 col-form-label ">NIK</label>
                        <div class="col-sm-10">
                          <input type="text" name="nik" class="form-control @error('nik') is-invalid @enderror" id="nik" >
                          <div class="invalid-feedback">
                            @error('nik') {{$message}}@enderror
                            </div>
                        </div>
                      </div>

                      <div class="mb-3 row">
                        <label for="isipesan" class="col-sm-2 col-form-label">Isi pesan</label>
                        <div class="col-sm-10">
                            <textarea class="form-control @error('isipesan') is-invalid @enderror" name="isipesan" id="isipesan" rows="4"></textarea>
                            <div class="invalid-feedback">
                                @error('isipesan') {{$message}}@enderror
                                </div>
                        </div>
                      </div>
                      <div class="row">
                          <div class="col-12 d-flex justify-content-center">
                              <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                      </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="layanan" tabindex="-1" aria-labelledby="layananLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="layananLabel">Pengajuan Layanan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Pengajuan layanan adalah sebuah fitur yang dapat digunakan oleh masyarakat untuk 
        mengajukan berbagai layanan kepada BUMDes Harapan Baru.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection

@push('custom-script')
{{-- <script>
$(".swal-confirm").click(function(e) {
    e.preventDefault();
    var form = $(this).parents('form');
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
</script> --}}
    
@endpush
  