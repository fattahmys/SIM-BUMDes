@extends('guest.index')
@section('content')
@section('title', 'SIMBUMDes - Berita')

    <!-- ======= Hero Section ======= -->
 <section id="hero">
  <div class="hero-container">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/guest/img/slide/slide-1.jpg);">
          <div class="carousel-container">
            <div class="carousel-content">
              <h2 class="animate__animated animate__fadeInDown">Selamat datang di <br><span>Website BUMDes Harapan Baru</span></h2>
              <p class="animate__animated animate__fadeInUp">Badan Usaha Milik Desa adalah badan usaha yang seluruh atau sebagian besar modalnya dimiliki oleh desa melalui penyertaan secara langsung yang berasal dari kekayaan Desa yang dipisahkan guna mengelola aset, jasa pelayanan dan usaha lainnya untuk kesejahteraan masyarakat desa.<p>
              <a href="#services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Unit Usaha</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/guest/img/slide/slide-2.jpg);">
          <div class="carousel-container">
            <div class="carousel-content">
              <h2 class="animate__animated animate__fadeInDown">Selamat datang di <br><span>Website BUMDes Harapan Baru</span></h2>
              <p class="animate__animated animate__fadeInUp">Badan Usaha Milik Desa adalah badan usaha yang seluruh atau sebagian besar modalnya dimiliki oleh desa melalui penyertaan secara langsung yang berasal dari kekayaan Desa yang dipisahkan guna mengelola aset, jasa pelayanan dan usaha lainnya untuk kesejahteraan masyarakat desa.<p>
              <a href="#services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Unit Usaha</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/guest/img/slide/slide-3.jpg);">
          <div class="carousel-container">
            <div class="carousel-content">
              <h2 class="animate__animated animate__fadeInDown">Selamat datang di <br><span>Website BUMDes Harapan Baru</span></h2>
              <p class="animate__animated animate__fadeInUp">Badan Usaha Milik Desa adalah badan usaha yang seluruh atau sebagian besar modalnya dimiliki oleh desa melalui penyertaan secara langsung yang berasal dari kekayaan Desa yang dipisahkan guna mengelola aset, jasa pelayanan dan usaha lainnya untuk kesejahteraan masyarakat desa.<p>
              <a href="#services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Unit Usaha</a>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon ri-arrow-left-line" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon ri-arrow-right-line" aria-hidden="true"></span>
      </a>

    </div>
  </div>
</section><!-- End Hero -->
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">
  
          <div class="row content">
            <div class="col-lg-6">
              <h2>Tentang BUMDes Harapan Baru</h2>
              <h3>Nama BUMDes adalah BUMDes Harapan Baru, memiliki makna bahwa kami berharap kegiatan yang kami lakukan bisa menjadikan berkah dan keberuntungan khususnya bagi seluruh masyarakat Desa Baru</h3>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
              <p>
                Badan Usaha Milik Desa Harapan Baru atau disingkat BUMDes Harapan Baru adalah sebuah badan usaha yang didirikan Pemerintah Desa Baru, Kecamatan Luyo, Kabupaten Polewali Mandar. Proses pendiriannya sudah berjalan sejak tahun 2017.
              </p>
              <p>


Sebagai Badan Usaha, pada prinsipnya kami akan mengambil peluang usaha yang sekiranya menguntungkan. Akan tetapi sebagai lembaga yang dibentuk Pemerintah Desa untuk meningkatkan kesejahteraan masyarakat Desa Baru maka usaha yang kami lakukan selalu melalui pertimbangan dari berbagai sisi termasuk salah satunya adalah apakah jenis usaha-usaha yang akan kami jalankan justru akan mematikan usaha masyarakat yang sudah ada atau tidak? <br>

              </p>
            </div>
          </div>
  
        </div>
      </section><!-- End About Section -->
  
     
      {{-- <!-- ======= Counts Section ======= -->
      <section id="counts" class="counts">
        <div class="container position-relative">
  
          <div class="text-center title">
            <h3>What we have achieved so far</h3>
            <p>Iusto et labore modi qui sapiente xpedita tempora et aut non ipsum consequatur illo.</p>
          </div>
  
          <div class="row counters">
  
            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Clients</p>
            </div>
  
            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
  
            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
  
            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hard Workers</p>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Counts Section --> --}}
  
      <!-- ======= Services Section ======= -->
      <section id="services" class="services section-bg">
        <div class="container">
  
          <div class="section-title">
            <span>Layanan</span>
            <h2>Layanan</h2>
            <p>Adapun layanan yang dijalankan oleh website bumdes Harapan Baru antara lain:</p>
          </div>
  
          <div class="row">
            <div class="col-md-6">
              <div class="icon-box">
                <i class="bi bi-briefcase"></i>
                <h4><a href="#">Sarana Produksi</a></h4>
                <p>Bumdes Harapan Baru menyediakan sarana produksi berupa pestisida untuk dijual kepada masyarakat.</p>
              </div>
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
              <div class="icon-box">
                <i class="bi bi-card-checklist"></i>
                <h4><a href="#">Program Pembinaan Petani</a></h4>
                <p>Program pembinaan petani adalah sebuah program untuk mengedukasi masyarakat tentang bertani yang baik.</p>
              </div>
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
              <div class="icon-box">
                <i class="bi bi-bar-chart"></i>
                <h4><a href="#">Pengajuan Layanan</a></h4>
                <p>Pengajuan layanan dapat digunakan oleh masyarakat untuk mengajukan sebuah layanan kepada BUMDes Harapan Baru.</p>
              </div>
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
              <div class="icon-box">
                <i class="bi bi-binoculars"></i>
                <h4><a href="#berita">Berita Kegitan BUMDes Harapan Baru</a></h4>
                <p>Sebagai media untuk mempublikasikan kegiatan yang dilaksanakan oleh BUMDes Harapan Baru</p>
              </div>
            </div>
          </div>
  
        </div>
      </section><!-- End Services Section -->
  
      <!-- ======= Portfolio Section ======= -->
      <section id="berita" class="portfolio">
        <div class="container">
  
          <div class="section-title">
            <span>Berita</span>
            <h2>Berita</h2>
            <p>Berita Kegitan BUMDes Harapan Baru</p>
          </div>
  
          {{-- <div class="row">
            <div class="col-lg-12">
              <ul id="portfolio-flters">
                {{ $post->links() }}
              </ul>
            </div>
          </div> --}}
  
          <div class="row portfolio-container">
  @foreach ($post as $Post=>$data)
  <div class="col-lg-4 col-md-6 portfolio-item app">
    <div class="card" style="height:20rem; width: 22rem;">
    <div style="height:20rem;" class="portfolio-wrap portofolio-info">
      <?php $content = substr($data->content, 0, 80); ?>
    
      <div class="col-md-55">
        <div class="thumbnail">
          <div class="image view view-first">
           <a href="post/{{$data->id}}"><img style="height: 10rem; width:22rem; object-fit:cover;" src="image/{{$data->gambar}}" alt="image" /></a> 
            <div class="mask no-caption">
              <div class="tools tools-bottom">
              </div>
            </div>
          </div>
          <div class="card-body"><h5 class="card-title">{{$data->title}}</h5>
            <p class="card-text">{!!$content!!}<a  class="" href="post/{{$data->id}}"><i> Baca Selengkapnya...</i></a></p>
            
          </div>
          
        </div>
      </div>
      </div>
    </div>
  </div>
      
  @endforeach


          
  
          </div>
  
        </div>
      </section><!-- End Portfolio Section -->
  
      <!-- ======= Team Section ======= -->
      <section id="team" class="team">
        <div class="container">
  
          <div class="section-title">
            <span>Direksi</span>
            <h2>Direksi</h2>
            <p>Jajaran direksi yang mengelola BUMDes</p>
          </div>
  
          <div class="row">
  
            <div class="col-lg-4">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="assets/guest/img/team/team-1.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Muhammad Yunus S</h4>
                  <span>Ketua</span>
                  <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 mt-4 mt-lg-0">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="assets/guest/img/team/team-2.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Megawati</h4>
                  <span>Sekretaris</span>
                  <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 mt-4 mt-lg-0">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="assets/guest/img/team/team-3.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Joko widodo</h4>
                  <span>Bendahara</span>
                  <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Team Section -->
  
     
  
      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container">
          <div class="section-title">
            <span>Contact</span>
            <h2>Contact</h2>
            <p>Silahkan hubungi kami</p>
          </div>
        </div>
  
        {{-- <div class="map">
          <iframe></iframe>
        </div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
   --}}
        <div class="container">
  
          <div class="info-wrap mt-5">
            <div class="row">
              <div class="col-lg-4 info">
                <i class="ri-map-pin-line"></i>
                <h4>Lokasi:</h4>
                <p>Jalan Poros Luyo<br>Desa Baru, Kecamatan Luyo, Kab. Polewali Mandar.</p>
              </div>
  
              <div class="col-lg-4 info mt-4 mt-lg-0">
                <i class="ri-mail-line"></i>
                <h4>Email:</h4>
                <p>bumdesharapanbaru@gmail.com<br></p>
              </div>
  
              <div class="col-lg-4 info mt-4 mt-lg-0">
                <i class="ri-phone-line"></i>
                <h4>Call:</h4>
                <p>+62 82116934350</p>
              </div>
            </div>
          </div>
  
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
  
        </div>
      </section><!-- End Contact Section -->

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