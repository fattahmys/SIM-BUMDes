@extends('layouts.master')
@section('content')
@section('title', 'SIMBUMDes - Post Kategori')
 
<h1>Pembelian</h1>
    <div class=" card card-body">
      <form action="{{route('insert_pembelian')}}" method="POST">
        @csrf
        <div class="row g-2">
            <div class="col-md mb-3">
                <label class="form-label">nama Barang</label>
                <select class="form-control" name="nama_barang" id="nama_barang" onchange="isi_otomatis()" aria-label="Default select example">
                    <option selected value="">Open this select menu</option>
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
                <input name="tgl" type="date" class="form-control @error('harga_beli') is-invalid @enderror" id="harga_beli" aria-describedby="emailHelp" placeholder="">
                <div class="invalid-feedback">
                @error('harga_beli') {{$message}}@enderror
                </div>
            </div>
        </div>
        <div class="row g-2">
            <div class="col-md mb-3">
                <label class="form-label">Harga Beli</label>
                <input name="harga_beli" type="text" value="" class="form-control @error('harga_beli') is-invalid @enderror" id="harga_beli" aria-describedby="emailHelp" onkeyup="convertToRupiah(this);" placeholder="">
                <div class="invalid-feedback">
                @error('nama_barang') {{$message}}@enderror
                </div>
            </div>

            <div class="col-md mb-3">
                <label class="form-label">Harga Jual</label>
                <input name="harga_jual" type="timepicker" class="form-control @error('harga_beli') is-invalid @enderror" id="harga_jual" aria-describedby="emailHelp" onkeyup="convertToRupiah(this);" placeholder="">
                <div class="invalid-feedback">
                @error('harga_beli') {{$message}}@enderror
                </div>
            </div>
        </div>
        <div class="row g-2">
            <div class="col-md mb-3">
                <label class="form-label">Jumlah</label>
                <input name="jumlah" type="text" class="form-control @error('nama_barang') is-invalid @enderror" id="nama_barang" aria-describedby="emailHelp" placeholder="">
                <div class="invalid-feedback">
                @error('nama_barang') {{$message}}@enderror
                </div>
            </div>
        
            <div class="col-md mb-3">
                <label class="form-label">Satuan</label>
                <select name="satuan" class="form-control" id="exampleFormControlSelect1">
                    <option selected value="">Open this select menu</option>
                    @foreach ($master_satuan as $Master_satuan =>$data)
                    <option value="{{$data->satuan}}">{{$data->keterangan}}</option>
                    @endforeach
                    
                  </select>
                <div class="invalid-feedback">
                @error('harga_beli') {{$message}}@enderror
                </div>
            </div>    

            
        </div>

           <button type="submit" class="btn btn-primary mt-3">Submit</button>
       </form>
          
    </div>
  </div>
    
@endsection
@push('custom-script')
<script type="text/javascript">
    function isi_otomatis(){
        var id = $("#nama_barang").val();
        $.ajax({
          url : '{{route('pembelian')}}', // file proses penginputan
          data : "id="+id,
        }).success(function (data){
       var json = data,
       obj = JSON.parse(json);
            console.log(obj);
    //     $('#harga_beli').val(obj.harga_beli); 
    //     $('#email').val(obj.email);
    // alert('sasa')
 
        });
    }
</script>
@endpush