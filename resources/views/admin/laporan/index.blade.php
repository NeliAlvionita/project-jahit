@extends('layouts.master', ['title' => 'Laporan'])

@section('title', 'Laporan')

@section('content')

<div class="card">
    <div class="card-header">
      <h3 class="card-title">LAPORAN</h3>
    </div>
    <div class="card-body p-0">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>No</th>
            <th>Pelanggan</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th>Jumlah</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($laporan as $index => $item)
          <tr>
            <td>{{$index + 1}}</td>
            <td>{{$item->nama_pelanggan}}</td>
            <td>{{$item->tanggal_pemesanan}}</td>
            <td>{{$item->status_pemesanan}}</td>
            <td>{{$item->total_pemesanan}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      
    </div>
  </div>
  <form action="/admin/laporan/#" method="POST">
    <a class="btn btn-danger" href="/admin/pemesanan/#">Cetak PDF</a>
  </form>
  
  @endsection