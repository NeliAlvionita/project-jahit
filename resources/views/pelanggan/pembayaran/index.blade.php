@extends('pelanggan.layouts.master', ['title' => 'Data Pembayaran'])

@section('title', 'Data Pembayaran')

@section('content')

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Data Pembayaran</h3>
    </div>
    <div class="card-body p-0">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>No</th>
            <th>ID Pembayaran</th>
            <th>ID Pemesanan</th>
            <th>Total</th>
            <th>Bank</th>
            <th>Bukti</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($pembayaran as $index => $item)
          <tr>
            <td>{{$index + 1}}</td>
            <td>{{$item->id_pembayaran}}</td>
            <td>{{$item->id_pemesanan}}</td>
            <td>{{$item->total_pemesanan}}</td>
            <td>{{$item->bank}}</td>
            <td>{{$item->bukti}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  
  @endsection