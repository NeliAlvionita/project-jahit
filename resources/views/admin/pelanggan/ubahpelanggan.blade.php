@extends('layouts.master', ['title' => 'Ubah Pelanggan'])

@section('title', 'Ubah Pelanggan')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Ubah Pelanggan</div>
                <div class="card-body">
                    <form action="/admin/pelanggan/{{$pelanggan->id_pelanggan}}" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control" value="{{$pelanggan->nama_pelanggan}}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Email</label>
                            <input type="text" name="email" id="email" class="form-control" value="{{$pelanggan->email_pelanggan}}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Password</label>
                            <input type="text" name="password" id="password" class="form-control" value="{{$pelanggan->password_pelanggan}}">
                        </div>
                        <div class="form-group">
                            <label for="nama">No Telepon</label>
                            <input type="text" name="notelepon" id="notelepon" class="form-control" value="{{$pelanggan->telp_pelanggan}}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Alamat</label>
                            <textarea name="alamat" id="alamat" class="form-control" value="{{$pelanggan->alamat_pelanggan}}"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="cancel" class="btn btn-default">Batal</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection