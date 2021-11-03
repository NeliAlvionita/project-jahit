@extends('layouts.master', ['title' => 'Lihat Produk'])

@section('title', 'Data Produk')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="/admin/produk/"> Back</a>
        </div>
    </div>
</div>
@foreach ($produk as $index => $item)
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{$item->name}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Harga:</strong>
            {{$item->harga}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Details:</strong>
            {{$item->detail}}
        </div>
    </div>
</div>
@endforeach
@endsection