@extends('layouts.master', ['title' => 'Tambah Pelanggan'])

@section('title', 'Tambah Tambah Pelanggan')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Tambah Tambah Pelanggan</div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nama">Email</label>
                            <input type="text" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nama">Password</label>
                            <input type="text" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nama">No Telepon</label>
                            <input type="text" name="notelepon" id="notelepon" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nama">Alamat</label>
                            <textarea name="alamat" id="alamat" class="form-control"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Tambah</button>
                        <button type="cancel" class="btn btn-default">Batal</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection