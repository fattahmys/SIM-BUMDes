@extends('layouts.master')
@section('content')
@section('title', 'SIMBUMDes - Penjualan')
 
<h3>Penjualan</h3>
    <div class=" card card-body">
        @if(session()->has('message'))
                <div class="alert alert-danger">
                    {{ session()->get('message') }}
                </div>
        @endif
      <form action="{{route('insert_penjualan')}}" method="POST">
        @csrf
        <div class="row g-2">
            <div class="col-md mb-3">
                <label class="form-label">nama Barang</label>
                <select class="form-control @error('nama_barang') is-invalid @enderror" name="nama_barang" id="nama_barang" onchange="isi_otomatis()" aria-label="Default select example">
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
                <input name="tgl" type="date" class="form-control @error('tgl') is-invalid @enderror" id="tgl" aria-describedby="emailHelp" placeholder="">
                <div class="invalid-feedback">
                @error('tgl') {{$message}}@enderror
                </div>
            </div>
        </div>
        <div class="row g-2">
            <div class="col-md mb-3">
                <label class="form-label">Harga Beli</label>
                <input name="harga_beli" type="text" value="" class="form-control @error('harga_beli') is-invalid @enderror" id="harga_beli" aria-describedby="emailHelp" onkeyup="convertToRupiah(this);" placeholder="" disabled>
                <div class="invalid-feedback">
                @error('nama_barang') {{$message}}@enderror
                </div>
            </div>

            <div class="col-md mb-3">
                <label class="form-label">Harga Jual</label>
                <input name="harga_jual" type="timepicker" class="form-control @error('harga_beli') is-invalid @enderror" id="harga_jual" aria-describedby="emailHelp" onkeyup="convertToRupiah(this);" placeholder="" disabled>
                <div class="invalid-feedback">
                @error('harga_beli') {{$message}}@enderror
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
        
            <div class="col-md mb-3">
                <label class="form-label">Satuan</label>
                <select name="satuan" disabled class="form-control @error('satuan') is-invalid @enderror" id="exampleFormControlSelect1">
                    <option selected disabled>-Open this select menu-</option>
                    @foreach ($master_satuan as $Master_satuan =>$data)
                    <option value="{{$data->satuan}}">{{$data->keterangan}}</option>
                    @endforeach
                    
                  </select>
                <div class="invalid-feedback">
                @error('satuan') {{$message}}@enderror
                </div>
            </div>    

            
        </div>

           <button type="submit" class="btn btn-primary mt-3">Submit</button>
       </form>
          
    </div>
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <h3>Daftar Penjualan</h3>
        </div>
    </div>
    <div class=" card card-body table-responsive">
        @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
        @endif
        <table class="table table-bordered table-sm">
            {{-- <caption>{{ $post->links() }}</caption> --}}
            <thead>
              <tr>
                  <th>NO</th>
                  <th>Tanggal</th>
                  <th>Nama Barang</th>
                  <th>Jumlah</th>
                  <th>Harga Jual</th>
                  {{-- <th>untung</th> --}}
              </tr>
            </thead>
            <tbody>
              <?php $no=1; ?>
              @foreach ($penjualan as $Penjualan =>$data)
              <tr>
                    <td>{{$no++}}</td>
                    <td>{{date('d-m-Y', strtotime($data->tgl))}}</td>
                    <td>{{$data->master_barang->nama_barang}}</td>
                    <td>{{$data->jumlah}} {{$data->satuan}}</td>
                    <td>Rp. {{number_format($data->master_barang->harga_jual * $data->jumlah, 0, ',', ',')}}</td>
                    {{-- <td></td> --}}
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

@endpush