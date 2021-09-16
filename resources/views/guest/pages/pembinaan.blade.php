@extends('guest.index')
@section('title', 'Bumdes - Pembinaan')
@section('content')
<div class="mt-5">
<br>
    <div class="container mt-5">
        <div class="card mb-5">
            <div class="card-header">
                Daftar program pembinaan petani
            </div>
            <div class="card-body">
                <h5 class="card-title text-center">Pembinaan Petani</h5>
                <p class="card-text text-center text-info">Pelajari Lebih Lanjut disini</p>
                @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
                  @endif

                <form action="{{route('insert_pembinaan')}}" method="POST">
                  @csrf
                    <div class="mb-3 row">
                        <label for="namakelompok" class="col-sm-2 col-form-label">Nama Kelompok Tani</label>
                        <div class="col-sm-10">
                          <input type="text" name="namakelompok" value="{{ old('namakelompok') }}" class="form-control @error('namakelompok') is-invalid @enderror" id="namakelompok">
                          <div class="invalid-feedback">
                            @error('namakelompok') {{$message}}@enderror
                            </div>
                        </div>
                      </div>

                      <div class="mb-3 row">
                        <label for="nohp" class="col-sm-2 col-form-label">No. Hp</label>
                        <div class="col-sm-10">
                          <input type="text" name="nohp" value="{{ old('nohp') }}" class="form-control @error('nohp') is-invalid @enderror" id="nohp">
                          <div class="invalid-feedback">
                            @error('nohp') {{$message}}@enderror
                            </div>
                        </div>
                      </div>

                      <div class="mb-3 row">
                        <label for="luaslahan" class="col-sm-2 col-form-label">Luas Lahan</label>
                        <div class="col-sm-10">
                          <input type="text" name="luaslahan" value="{{ old('luaslahan') }}" class="form-control @error('luaslahan') is-invalid @enderror" id="luaslahan">
                          <div class="invalid-feedback">
                            @error('luaslahan') {{$message}}@enderror
                            </div>
                        </div>
                      </div>

                      <div class="mb-3 row">
                        <label for="alamatlahan" class="col-sm-2 col-form-label ">Alamat Lahan</label>
                        <div class="col-sm-10">
                          <input type="text" name="alamatlahan" value="{{ old('alamatlahan') }}" class="form-control @error('alamatlahan') is-invalid @enderror" id="alamatlahan">
                          <div class="invalid-feedback">
                            @error('alamatlahan') {{$message}}@enderror
                            </div>
                        </div>
                      </div>

                      <div class="row">
                          <div class="col-12 d-flex justify-content-center">
                              <button type="submit" class="btn btn-primary ">Submit</button>
                          </div>
                      </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection