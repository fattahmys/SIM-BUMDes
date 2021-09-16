@extends('guest.index')
@section('title', 'SIMBUMDes - Berita')

@section('content')

 
<div class="container pt-4">
    <div class="row bg-white p-0 pt-4">
        <div class="col-md-9 col-sm-12 bg-white pt-4">
            {{-- <img src="https://atlantictravelsusa.com/wp-content/uploads/2016/04/dummy-post-horisontal-thegem-blog-default.jpg" class="card-img-top" alt="gambar" > --}}
            <div class="p-4 pt-4">
                <h1 class="mt-5">{{ $post->title }}</h1>
                Category: {{ $post->kategori }}
                <center><img class="mt-3" style="height: 25rem; width:auto; display: block;" src="{{asset('image/'.$post->gambar)}}"></center>  
                <p class="mt-5">{!! $post->content !!}</p>
            </div>
        </div>      
        <div class="bg-light bg-gradient col-md-3 col-sm-12 ">
            {{-- <img src="https://atlantictravelsusa.com/wp-content/uploads/2016/04/dummy-post-horisontal-thegem-blog-default.jpg" class="card-img-top" alt="gambar" > --}}
            <div style="margin-top: 40px;" class="p-4">
                <h1>{{ $post->title }}</h1>
                Category: {{ $post->kategori }}
               
            </div>
            <div class="card col-sm-12 mb-2">
               <div class="card-body">
                 <h5 class="card-title">Useful Links</h5>
                 <p class="card-text"><ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                </ul></p>
               </div>
             </div>
            
        </div>            
    </div>
</div>


@endsection