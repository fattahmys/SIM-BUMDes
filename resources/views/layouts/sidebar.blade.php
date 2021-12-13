
<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
      <h3>General</h3>
      <ul class="nav side-menu">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-home"></i> Dashboard</a></li>
        
        <li><a><i class="fa fa-edit"></i>Berita <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          {{-- <li><a href="{{route('galery')}}">Postingan</a></li> --}}
            <li><a href="{{route('post')}}">Kelola Postingan</a></li>
            <li><a href="{{route('postkategori')}}">Kategori Postingan</a></li>
        </ul>
        </li>
        <li><a href="{{route('kelola_pembinaan')}}"><i class="fa  fa-th-list"></i>Pembinaan Petani</a></li>
        <li><a href="{{route('kelola_pengajuanlayanan')}}"><i class="fa  fa-th-list"></i>Pengajuan Layanan</a></li>
        <hr class="mt-3">
        <h3>Inventaris</h3>
        <li><a><i class="fa fa-edit"></i>Master <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{route('master_barang')}}">Barang</a></li>
            <li><a href="{{route('master_satuan')}}">Satuan</a></li>
          </ul>
        </li>
        
        <li><a href="{{route('debet')}}"><i class="fa fa-credit-card"></i>Debet/Saldo</a></li>
        <li><a href="{{route('stok')}}"><i class="fa fa-cube"></i>Stok</a></li>
        <li><a href="{{route('pembelian')}}"><i class="fa fa-sign-in"></i>Barang Masuk</a></li>
        <li><a href="{{route('penjualan')}}"><i class="fa fa-sign-out"></i>Barang Keluar</a></li>
        <li><a><i class="fa fa-edit"></i>Laporan <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{route('laporan_pembelian')}}">Laporan Pembelian</a></li>
            <li><a href="{{route('laporan_penjualan')}}">Laporan Penjualan</a></li>
            <li><a href="{{route('laporan')}}">Laporan</a></li>
          </ul>
        </li>
        </div>
      
  </div>
  <!-- /sidebar menu -->