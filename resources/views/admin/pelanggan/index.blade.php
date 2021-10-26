@extends('layouts.master')

@section('title', 'Data Produk')

@section('content')

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Data Pelanggan</h3>
      <a href="/admin/produk/#" class="btn btn-primary float-right">Tambah</a>
    </div>
    <div class="card-body p-0">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Password</th>
            <th>No Telepon</th>
            <th>Alamat</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($pelanggan as $index => $item)
          <tr>
            <td>{{$index + 1}}</td>
            <td>{{$item->id_pelanggan}}</td>
            <td>{{$item->nama_pelanggan}}</td>
            <td>{{$item->email_pelanggan}}</td>
            <td>{{$item->password_pelanggan}}</td>
            <td>{{$item->telp_pelanggan}}</td>
            <td>{{$item->alamat_pelanggan}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  
  @endsection