<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporan-pembelian.xls");
?>
<table class="table table-bordered table-sm">
    {{-- <caption>{{ $post->links() }}</caption> --}}
    <thead>
      
        <tr align="center">
            <th rowspan="2">No</th>
            <th rowspan="2">Tanggal</th>
            <th rowspan="2">Nama Barang</th>
            <th rowspan="2">Jumlah</th>
            <th colspan="2">Harga</th>
            <th rowspan="2">Kredit</th>
            <th colspan="2">Laba</th>
        </tr>
        <tr align="center">
            <th >Beli</th>
            <th>Jual</th>
            <th>Laba/1</th>
            <th>Laba</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $totalLaba=0;
            $totalKredit=0;
        ?>
      <?php $no=1; ?>
      @foreach ($pembelian as $Pembelian =>$data)
      
      <tr>
            <td>{{$no++}}</td>
            <td>{{date('d-m-Y', strtotime($data->tgl))}}</td>
            <td>{{$data->master_barang->nama_barang}}</td>
            <td>{{number_format($data->jumlah)}}</td>
            <td>Rp. {{number_format($data->kredit / $data->jumlah)}}</td>
            <td>Rp. {{number_format(($data->kredit + $data->untung_tot)/$data->jumlah)}}</td>
            <td>Rp. {{number_format($data->kredit)}}</td>
            <td>Rp. {{number_format($data->untung_per1)}}</td>
            <td>Rp. {{number_format($data->untung_tot)}}</td>
            
        </tr>
        @php
            $totalLaba += $data->untung_tot;
            $totalKredit += $data->kredit;
        @endphp
        @endforeach
        <tr align="center">
            <th colspan="6">Jumlah</th>
            <th colspan="1">Rp. {{number_format($totalKredit)}}</th>
            <th colspan="1"></th>
            <th colspan="1">Rp. {{number_format($totalLaba)}}</th>
        </tr>
    </tbody>
  </table>