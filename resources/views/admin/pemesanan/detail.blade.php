@extends('layouts.master', ['title' => 'Data Detail Pemesanan'])

@section('title', 'Data Detail Pemesanan')

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Data Detail Pemesanan</h3>
  </div>
  <div class="card-body">
    <p>ID Pemesanan        : {{$pemesanan->id_pemesanan}}</p>
    <p>Nama Pelanggan      : {{$pemesanan->nama_pelanggan}}</p>
    <p>Tanggal Pemesanan   : {{$pemesanan->tanggal_pemesanan}}</p>
    <p>Total Pemesanan     : {{$pemesanan->total_pemesanan}}</p>
    <p>Alamat Pemesanan    : {{$pemesanan->alamat_pemesanan}}</p>
    <p>Produk yang dipesan : {{$pemesanan->nama_produk}}</p>
    <p>Jumlah              : {{$pemesanan->jumlah}}</p>
    <p>Ukuran              : {{$pemesanan->ukuran}}</p>
  </div>
  <form action="/admin/pemesanan/{{$item->id_pemesanan}}" method="POST">
    <div class="form-group">
      <label for="status">Status Pemesanan</label>
      <select name="status" id="status" class="form-control">
        <option value="Belum diproses">Belum Diproses</option>
        <option value="Pesanan Diproses">Pesanan Diproses</option>
        <option value="Pesanan Diproses">Pesanan Selesai</option>
      </select>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
  </form>
</div>

