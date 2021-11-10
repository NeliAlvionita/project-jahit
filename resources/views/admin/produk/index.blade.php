@extends('layouts.master', ['title' => 'Data Produk'])

@section('title', 'Data Produk')

@section('content')

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Data Produk</h3>
      <a href="/admin/produk/addproduk" class="btn btn-primary float-right">Tambah</a>
    </div>
    <div class="card-body p-0">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Foto</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($produk as $index => $item)
          <tr>
            <td>{{$index + 1}}</td>
            <td>{{$item->id_produk}}</td>
            <td>{{$item->nama_produk}}</td>
            <td>{{$item->harga_produk}}</td>
            <td><img src="{{asset($item->foto_produk)}}"></td>
            <td>{{$item->deskripsi_produk}}</td>
            <td>
            <form action="/admin/produk/{{$item->id_produk}}" method="POST">
              <a class="btn btn-warning" href="/admin/produk/{{$item->id_produk}}/ubahproduk">Edit</a>
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  
  @endsection