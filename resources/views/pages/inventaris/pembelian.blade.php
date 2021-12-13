@extends('layouts.master')
@section('content')
@section('title', 'SIMBUMDes - Pembelian')
 
<h3>Barang Masuk</h3>
    <div class=" card card-body">
      <form action="{{route('insert_pembelian')}}" method="POST">
        @csrf
        <div class="row g-2">
            <div class="col-md mb-3">
                <label class="form-label">nama Barang</label>
                <select class="form-control @error('nama_barang') is-invalid @enderror" name="nama_barang" id="nama_barang" value="{{old('nama_barang')}}" aria-label="Default select example">
                    <option selected disabled>-Open this select menu-</option>
                    @foreach ($master_barang as $Master_barang =>$data)
                    <option value="{{$data->id}}">{{$data->nama_barang}}</option>
                    @endforeach
                    
                  </select>
                  
                <div class="invalid-feedback">
                @error('nama_barang') {{$message}}@enderror
                </div>
            </div>

            <div class="col-md mb-3">
                <label class="form-label">Tanggal Pembelian</label>
                <input name="tgl" value="{{old('tgl')}}" type="date" class="form-control @error('tgl') is-invalid @enderror" id="tgl" aria-describedby="emailHelp" placeholder="">
                <div class="invalid-feedback">
                @error('tgl') {{$message}}@enderror
                </div>
            </div>
        </div>
        <div class="row g-2">
            <div class="col-md mb-3">
                <label class="form-label">Jumlah</label>
                <input name="jumlah" type="text" value="{{old('jumlah')}}" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah" aria-describedby="emailHelp" placeholder="">
                <div class="invalid-feedback">
                @error('jumlah') {{$message}}@enderror
                </div>
            </div>
        
        
        </div>

           <button type="submit" class="btn btn-primary mt-3">Submit</button>
       </form>
          
    </div>
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <h3>Daftar Barang Masuk</h3>
        </div>
    </div>
    <div class="card card-body table-responsive">
      @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
                  @endif
        <table class="table table-bordered table-sm">
            <thead>
              <tr>
                  <th>NO</th>
                  <th>Tanggal</th>
                  <th>Nama Barang</th>
                  <th>Jumlah</th>
                  <th>Harga Beli</th>
                  <th>Kredit</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1; ?>
              @foreach ($pembelian as $Pembelian =>$data)
              
              <tr>
                    <td>{{$no++}}</td>
                    <td>{{date('d-m-Y', strtotime($data->tgl))}}</td>
                    <td>{{$data->master_barang->nama_barang}}</td>
                    <td>{{$data->jumlah}} {{$data->satuan}}</td>
                    <td>Rp. {{number_format($data->kredit / $data->jumlah, 0, ',', ',')}}</td>
                    <td>Rp. {{number_format($data->kredit, 0, ',', ',')}}</td>
                    {{-- <td>
                        <a href="#" data-id="{{$data->id}}" class="btn btn-sm btn-danger swal-confirm">
                          <form action="{{route('delete_master',$data->id)}}" id="delete{{$data->id}}" method="POST" >
                          @csrf
                          @method('delete')
                          </form> Delete </a>
                        <a href="{{route('edit_master_barang',$data->id)}}" data-id="{{$data->id}}" class="btn btn-sm btn-primary">edit</a>
                        
                    </td> --}}
                </tr>
                @endforeach
            </tbody>
          </table>
          
    </div>
  </div>
  </div>


@endsection
@push('custom-script')
<script type="text/javascript">
    function isi_otomatis(){
        var id = $("#nama_barang").val();
        $.ajax({
          url : '{{route('pembelian')}}', // file proses penginputan
          data : {'id': id},
        }).success(function (data){
    //    var json = data,
    //    obj = JSON.parse(json);
    //         console.log(obj);
    //     $('#harga_beli').val(obj.harga_beli); 
    //     $('#email').val(obj.email);
    alert('sasa')
 
        });
    }
</script>
@endpush