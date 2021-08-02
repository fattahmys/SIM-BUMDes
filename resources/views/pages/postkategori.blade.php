@extends('layouts.master')
@section('content')
@section('title', 'SIMBUMDes - Post Kategori')

<h1>Kategori Postingan</h1>
<a href="{{route('tambahpostktr')}}" method="post" class="btn btn-primary mb-3 mt-2">Tambah Kategori</a>
    <div class=" card card-body table-responsive">
        <table class="table table-sm">
            <caption>List of users</caption>
            <thead>
              <tr>
                  <th>NO</th>
                  <th>kategori</th>
                  <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1; ?>
              @foreach ($postkategori as $Postkategori =>$data)
              <tr>
                    <td>{{$no++}}</td>
                    <td>{{$data->kategori}}</td>
                    <td>
                        <a href="" class="btn btn-sm btn-success">Edit</a>
                        <a href="post/{{$data->id}}" class="btn btn-sm btn-primary">Baca Artikel</a>
                       
                    </td>
                    
                </tr>
                @endforeach
            </tbody>
          </table>
          
    </div>
  </div>
    
@endsection

