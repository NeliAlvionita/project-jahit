@extends('layouts.master', ['title' => 'Data Detail Pemesanan'])

@section('title', 'Data Detail Pemesanan')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Data Detail Pembayaran</h3>
  </div>
</div>
<div class="card">
  <div class="card-body">
   <p>Nama   : {{$pembayaran->pelanggan->nama_pelanggan }}</p>
   <p>Bank   : {{$pembayaran->bank }}</p>
   <p>Total  : {{$pembayaran->total_pemesanan }}</p>
   <p>Bukti  : </p>
   <p><img src="{{asset($pembayaran->bukti)}}"> </p>
  </div>
</div>
@endsection