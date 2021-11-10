@extends('layouts.master', ['title' => 'Tambah Produk'])

@section('title', 'Tambah Produk')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Produk</h3>
        </div>
         <div class="card-body">
            <form action="/admin/produk" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Produk"
                aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" name="harga" id="harga" class="form-control" placeholder="Harga Produk"
                aria-describedby="helpId" >
                <small id="helpId" class="text-muted">Contoh : 50000</small>
            </div>
            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" name="foto" id="foto" class="form-control">
                <small id="helpId" class="text-muted">File berupa JPG/JPEG</small>
            </div>
            <div class="form-group">
                <label for="deksripsi">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" class="form-control" placeholder="Tulis Deskripsi Produk"
                aria-describedby="helpId"></textarea>
            </div>
                <button type="submit" class="btn btn-success">Tambah</button>
                <button type="cancel" class="btn btn-default">Batal</button>
            </form>
        </div>
    </div>                   
@endsection