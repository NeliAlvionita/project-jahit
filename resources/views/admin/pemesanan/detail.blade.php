@extends('layouts.master', ['title' => 'Data Detail Pemesanan'])

@section('title', 'Data Detail Pemesanan')
@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Data Detail Pemesanan</h3>
  </div>
</div>

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Pemesanan</h3>
  </div>
  <div class="card-body">
   <p>Tanggal : {{$pemesanan->tanggal_pemesanan }}</p>
   <p>Total   : {{$pemesanan->total_pemesanan }}</p>
   <p>Status  : {{$pemesanan->status_pemesanan }}</p>
  </div>
</div>

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Pelanggan</h3>
  </div>
  <div class="card-body">
    <p>Nama      : {{$pemesanan->pelanggan->nama_pelanggan }}</p>
    <p>Nomor HP  : {{$pemesanan->pelanggan->telp_pelanggan }}</p>
    <p>Email     : {{$pemesanan->pelanggan->email_pelanggan }}</p>
  </div>
</div>

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Pengiriman</h3>
  </div>
  <div class="card-body">
   <p>Alamat    : {{$pemesanan->alamat_pemesanan }}</p>
  </div>
</div>

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Update Status Pemesanan</h3>
  </div>
  <form action="/admin/pemesanan/{{$pemesanan->id_pemesanan}}" method="POST">
    <div class="form-group">
      <select name="status" id="status" class="form-control">
        <option value="Belum diproses">Belum Diproses</option>
        <option value="Pesanan Diproses">Pesanan Diproses</option>
        <option value="Pesanan Diproses">Pesanan Selesai</option>
      </select> 
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
  </form>
</div>
@endsection



