@extends('pelanggan.layouts.master', ['title' => 'Data Pemesanan'])

@section('title', 'Data Pemesanan')

@section('content')

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Data Pemesanan</h3>
    </div>
    <div class="card-body p-0">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>No</th>
            <th>ID Pemesanan</th>
            <th>Tanggal</th>
            <th>Total</th>
            <th>Alamat</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($pemesanan as $index => $item)
          <tr>
            <td>{{$index + 1}}</td>
            <td>{{$item->id_pemesanan}}</td>
            <td>{{$item->tanggal_pemesanan}}</td>
            <td>{{$item->total_pemesanan}}</td>
            <td>{{$item->alamat_pemesanan}}</td>
            <td>{{$item->status_pemesanan}}</td>
            <td>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  
  @endsection