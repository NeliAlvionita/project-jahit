@extends('layouts.master', ['title' => 'Tambah Produk'])

@section('title', 'Tambah Produk')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Tambah Produk</div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nama">Harga</label>
                            <input type="text" name="harga" id="harga" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nama">Foto</label>
                            <input type="text" name="foto" id="foto" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nama">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Tambah</button>
                        <button type="cancel" class="btn btn-default">Batal</button>
     
                    </form>
                </div>
            </div>
        </div>
    </div>                   
@endsection