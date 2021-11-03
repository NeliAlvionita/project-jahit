@extends('layouts.master', ['title' => 'Ubah Data Produk')
@section('title', 'Ubah Data Produk')

@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Ubah Data</h3>
  </div>
  <div class="card-body">
    <form action="/admin/produk/{{$produk->id_produk}}" method="post">
      @method('PUT')
      @csrf
      <div class="form-group">
        <label for="nama">Nama Produk</label>
        <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Kelas"
          value="{{$produk->nama_produk}}" aria-describedby="helpId">
      </div>
      <div class="form-group">
        <label for="harga">Harga Produk</label>
        <input type="text" name="harga" id="harga" class="form-control" placeholder="Harga Produk"
          aria-describedby="helpId" value="{{$produk->harga_produk}}">
        <small id="helpId" class="text-muted">Contoh : 50000</small>
      </div>
      <div class="form-group">
        <label for="foto">Foto Produk</label>
        <input type="file" name="foto" id="foto" class="form-control" placeholder="Foto"
          aria-describedby="helpId" value="{{$produk->foto_produk}}">
        <small id="helpId" class="text-muted">File berupa JPG/JPEG</small>
      </div>
      <div class="form-group">
        <label for="deksripsi">Deskripsi Produk</label>
        <textarea name="deskripsi" id="deskripsi" class="form-control" value="{{$produk->deskripsi_produk}}"></textarea>
      </div>
      <button type="submit" class="btn btn-success">Kirim</button>
    </form>
  </div>
</div>
@endsection