@extends('layouts.master')
@section('content')
@section('title', 'SIMBUMDes - Newpost')

<div class="container">
    <div class="row bg-white p-0">
        <div class="col-md-9 col-sm-12 bg-white ">
            {{-- <img src="https://atlantictravelsusa.com/wp-content/uploads/2016/04/dummy-post-horisontal-thegem-blog-default.jpg" class="card-img-top" alt="gambar" > --}}
            <div class="p-4">
                <h1>{{ $post->title }}</h1>
                Category: {{ $post->kategori }}
                <p class="mt-5">{!! $post->content !!}</p>
            </div>
        </div>      
        <div class="col-md-3 col-sm-12 ">
            {{-- <img src="https://atlantictravelsusa.com/wp-content/uploads/2016/04/dummy-post-horisontal-thegem-blog-default.jpg" class="card-img-top" alt="gambar" > --}}
            <div class="p-4">
                <h1>{{ $post->title }}</h1>
                Category: {{ $post->kategori }}
               
            </div>
        </div>            
    </div>
</div>

@endsection