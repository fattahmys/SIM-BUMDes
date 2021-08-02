<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html">BUMDes<span>HarapanBaru</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/guest/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="{{route('index')}}#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="{{route('index')}}#about">About</a></li>
          <li class="dropdown"><a class="dropdown scrollto" href="{{route('index')}}#services"><span>Layanan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
             
              </li>
              <li><a href="#">Sarana Produksi</a></li>
              <li><a href="{{route('pembinaan')}}">Daftar Pembinaan petani</a></li>
              <li><a href="{{route('layanan')}}">Pengajuan Layanan</a></li>
            </ul>
          <li><a class="nav-link scrollto" href="{{route('index')}}#berita">Berita</a></li>
          <li><a class="nav-link scrollto" href="{{route('index')}}#team">Direksi</a></li>
          </li>
          <li><a class="nav-link scrollto" href="{{route('index')}}#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="{{route('login')}}"><span class="border-start border-3"> Login Admin</span></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>