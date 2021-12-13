@extends('guest.index')
@section('content')
@section('title', 'SIMBUMDes')

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
  
     
      <!-- ======= Counts Section ======= -->
      <section id="counts" class="counts">
        <div class="container position-relative">
  
          <div class="text-center title">
            <h3>Counts</h3>
            {{-- <p>Iusto et labore modi qui sapiente xpedita tempora et aut non ipsum consequatur illo.</p> --}}
          </div>
  
          <div class="row counters">
            @php
            $totalDebet = 0;
            $barangmasuk = 0;
            $barangkeluar = 0;
            $keuntungan = 0;
                foreach ($debet as $Debet => $saldo) {
                  $totalDebet += $saldo->jumlah;
                }

                foreach ($pembelian as $Pembelian) {
                  $keuntungan += $Pembelian->untung_tot;
                }

                foreach ($master_barang as $barang) {
                  $barangmasuk += $barang->jumlah_masuk;
                  $barangkeluar += $barang->jumlah_keluar;
                }
            
            @endphp
            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="{{$totalDebet}}" data-purecounter-duration="1" class="purecounter"></span>
              <p>Total Dana Masuk</p>
            </div>
  
            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="{{$keuntungan}}" data-purecounter-duration="1" class="purecounter"></span>
              <p>Total Keuntungan</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="{{$barangmasuk}}" data-purecounter-duration="1" class="purecounter"></span>
              <p>Barang Masuk</p>
            </div>
  
            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="{{$barangkeluar}}" data-purecounter-duration="1" class="purecounter"></span>
              <p>Barang Keluar</p>
            </div>
    
          </div>
  
        </div>
      </section><!-- End Counts Section -->
  
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
                <h4><a href="{{route('layanan_stok')}}">Sarana Produksi</a></h4>
                <p>Bumdes Harapan Baru menyediakan sarana produksi berupa pestisida untuk dijual kepada masyarakat.</p>
              </div>
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
              <div class="icon-box">
                <i class="bi bi-card-checklist"></i>
                <h4><a href="{{route('pembinaan')}}">Program Pembinaan Petani</a></h4>
                <p>Program pembinaan petani adalah sebuah program untuk mengedukasi masyarakat tentang bertani yang baik.</p>
              </div>
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
              <div class="icon-box">
                <i class="bi bi-bar-chart"></i>
                <h4><a href="{{route('layanan')}}">Pengajuan Layanan</a></h4>
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
  
          
          <div class="row portfolio-container">
  @foreach ($post as $Post=>$data)
  <div class="col-lg-4 col-md-6 portfolio-item app">
    <div class="card" style="height:20rem; width: 22rem;">
    <div style="height:20rem;" class="portfolio-wrap portofolio-info">
      <?php $content = substr($data->content, 0, 50); ?>
    
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
          <div class="berita">{{ $post->links() }}</div>
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
                <div class="pic"><img src="assets/guest/img/team/team-1.png" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h6><b>Muh. Yunus</b></h6>
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
                <div class="pic"><img src="assets/guest/img/team/team-1.png" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h6><b>Rindwan Andika</b></h6>
                  <span>Ketua Unit</span>
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
                <div class="pic"><img src="assets/guest/img/team/team-1.png" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h6><b>Nur Atika</b></h6>
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
  
  @endsection


