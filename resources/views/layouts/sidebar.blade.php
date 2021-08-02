
<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
      <h3>General</h3>
      <ul class="nav side-menu">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-home"></i> Dashboard</a></li>
        
        <li><a><i class="fa fa-edit"></i>Berita <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{route('galery')}}">Postingan</a></li>
            <li><a href="{{route('post')}}">Kelola Postingan</a></li>
            <li><a href="{{route('postkategori')}}">Kategori Postingan</a></li>
        </ul>
        </li>
        <li><a href="{{route('kelola_pembinaan')}}"><i class="fa fa-home"></i>Pembinaan Petani</a></li>
        <li><a href="{{route('kelola_pengajuanlayanan')}}"><i class="fa fa-home"></i>Pengajuan Layanan</a></li>
        <hr class="mt-3">
        <h3>Inventaris</h3>
        <li><a><i class="fa fa-edit"></i>Master <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{route('master_barang')}}">Barang</a></li>
            <li><a href="{{route('post')}}">Satuan</a></li>
          </ul>
        </li>
        
        <li><a href="{{route('kelola_pembinaan')}}"><i class="fa fa-home"></i>Pembelian</a></li>
        <li><a href="{{route('kelola_pembinaan')}}"><i class="fa fa-home"></i>Penjualan</a></li>
        <li><a href="{{route('kelola_pembinaan')}}"><i class="fa fa-home"></i>Stok</a></li>
        <li><a href="{{route('kelola_pembinaan')}}"><i class="fa fa-home"></i>Laporan</a></li>
        </div>
      
  </div>
  <!-- /sidebar menu -->