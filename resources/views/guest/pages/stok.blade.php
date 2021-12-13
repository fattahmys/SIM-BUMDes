@extends('guest.index')
@section('content')
@section('title', 'SIMBUMDes')
@push('custom-style')
@endpush
<div class="mt-5">
    <br>
        <div class="container mt-5">
            <div class="card mb-5">
                <div class="card-header">
                    Daftar program pembinaan petani
                </div>
                <div class="card-body">
                  <div class="d-flex flex-row-reverse bd-highlight">
                    <div class="p-2 bd-highlight">
                      <div class="col-sm-6 col-md-10">
                        <form action="{{route('layanan_stok')}}" method="get">
                          <div class="input-group mb-3 md-5">
                            <input type="text" class="form-control" placeholder="Pencarian..." name="search" value="{{request('search')}}">
                            <button class="btn btn-success" type="submit">Cari</button>
                          </div>
                        </form>
                      </div>
                    </div>
                    {{-- <div class="p-2 bd-highlight">
                      <div class="dropstart mb-3">
                        <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          Kategori
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" name="desc" data-order="desc" href="{{route('layanan_stok')}}">desc</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </div>
                    </div> --}}
                  </div>
                    
                  
                  
                  
                  
                    <table class="table table-bordered">
                        {{-- <caption>{{ $post->links() }}</caption> --}}
                        @if ($master_barang->count())
                        <thead>
                          <tr align="center">
                              <th>NO</th>
                              <th>Nama Barang</th>
                              <th>Jumlah Stok</th>
                              <th>Satuan</th>
                              <th>Harga Jual</th>
                              
                          </tr>
                        </thead>
                        <tbody>
                          <?php $no=1; ?>
                          @foreach ($master_barang as $barang =>$data)
                          
                              <tr>
                                <td align="center">{{$no++}}</td>
                                <td>{{$data->nama_barang}}</td>
                                <td align="center">{{$data->stok}}</td>
                                <td align="center">{{$data->satuan}}</td>
                                <td>Rp. {{number_format($data->harga_jual, 0, ',', ',')}}</td>
                              </tr>
                              @endforeach
                            </tbody>
                            @else
                            <thead>
                              <tr align="center">
                                  <th>NO</th>
                                  <th>Nama Barang</th>
                                  <th>Jumlah Stok</th>
                                  <th>Satuan</th>
                                  <th>Harga Jual</th>
                                  
                              </tr>
                            </thead>
                            <tbody>
                             
                              
                              
                                  <tr>
                                   <td align="center" colspan="5">...Pencarian Tidak Ada...</td>
                                  </tr>
                                  
                            </tbody>
                            @endif
                      </table>
                      {{-- {{ $master_barang->links() }} --}}
    
                </div>
            </div>
        </div>
    </div>


  @endsection

 
      
  