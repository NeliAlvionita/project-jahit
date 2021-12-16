@extends('layouts.master', ['title' => 'Data Detail Pembayaran'])

@section('title', 'Data Detail Pembayaran')

@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Data Detail Pembayaran</h3>
  </div>
</div>
<div class="card">
  <div class="card-body">
   <p>Nama   : {{$pembayaran->pemesanan->pelanggan->nama_pelanggan }}</p>
   <p>Bank   : {{$pembayaran->bank }}</p>
   <p>Total  : {{$pembayaran->pemesanan->total_pemesanan }}</p>
   <p>Bukti  : </p>
   <p><img src="{{asset($pembayaran->bukti)}}"> </p>
  </div>
</div>
<?php
 $pemesanan_opsi = \App\Pemesanan::where('id_pemesanan', $pembayaran->id_pemesanan)->first();
//  dd($pemesanan_opsi);
?>
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Update Status Pemesanan</h3>
  </div>
  <div class="card-body">
  <form action="/admin/pembayaran/update_status" method="POST">
    @csrf
    <input type="hidden" name="id_pemesanan" value="{{$pembayaran->id_pemesanan}}">
    <div class="form-group">
      <select name="status_pemesanan" id="status_pemesanan" class="form-control">
        <option value="">-- Pilih Opsi --</option>
        <option <?php if($pemesanan_opsi->status_pemesanan=='Belum Dibayar'){ echo "selected";} ?> value="Belum Dibayar">Belum Dibayar</option>
        <option <?php if($pemesanan_opsi->status_pemesanan=='Sudah Dibayar'){ echo "selected";} ?> value="Sudah Dibayar">Sudah Dibayar</option>
        <option <?php if($pemesanan_opsi->status_pemesanan=='Pesanan Selesai'){ echo "selected";} ?> value="Pesanan Selesai">Pesanan Selesai</option>
      </select> 
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
  </form>
</div>
</div>
@endsection
