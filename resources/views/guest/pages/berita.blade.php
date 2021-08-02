@extends('guest.index')
@section('title', 'SIMBUMDes - Newpost')

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
  <!-- ======= Footer ======= -->
  <footer id="footer">
   <div class="footer-top">
     <div class="container">
       <div class="row">

         <div class="col-lg-3 col-md-6">
           <div class="footer-info">
             <h3>BUMDesHarapanBaru</h3>
             <p>
               Jalan Poros Luyo <br>
               Desa Baru, Kecamatan Luyo, Kab. Polewali Mandar.<br><br>
               <strong>Phone:</strong> +62 82116934350<br>
               <strong>Email:</strong> bumdesharapanbaru@gmail.com<br>
             </p>
             <div class="social-links mt-3">
               <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
               <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
               <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
               <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
               <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
             </div>
           </div>
         </div>

         <div class="col-lg-2 col-md-6 footer-links">
           <h4>Useful Links</h4>
           <ul>
             <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
             <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
             <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
             <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
             <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
           </ul>
         </div>

         <div class="col-lg-3 col-md-6 footer-links">
           <h4>Our Services</h4>
           <ul>
             <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
             <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
             <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
             <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
             <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
           </ul>
         </div>

         <div class="col-lg-4 col-md-6 footer-newsletter">
           <h4>Our Newsletter</h4>
           <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
           <form action="" method="post">
             <input type="email" name="email"><input type="submit" value="Subscribe">
           </form>

         </div>

       </div>
     </div>
   </div>

   <div class="container">
     <div class="copyright">
       &copy; Copyright <strong><span><a href="https://www.instagram.com/fattahmys/">Abd. Fattah Mys</a></span></strong>. All Rights Reserved
     </div>
     <div class="credits">
       <!-- All the links in the footer should remain intact. -->
       <!-- You can delete the links only if you purchased the pro version. -->
       <!-- Licensing information: https://bootstrapmade.com/license/ -->
       <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mybiz-free-business-bootstrap-theme/ -->
       Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
     </div>
   </div>
 </footer><!-- End Footer -->

@endsection