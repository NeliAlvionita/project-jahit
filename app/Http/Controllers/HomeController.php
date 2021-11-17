<?php

namespace App\Http\Controllers;

use App\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index(){
        $pelanggan = Pelanggan::all();

        return view('admin/pelanggan/index', ['pelanggan'=> $pelanggan]);
    }

    public function add(){
        return view('admin.pelanggan.addpelanggan');
    }

    public function ubah(Request $request)
    {
        $pelanggan = Pelanggan::find($request->id_pelanggan);
        return view('/admin/pelanggan/ubahpelanggan',  ['pelanggan' => $pelanggan]);
    }
    public function update(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
            'notelepon' => 'required',
            'alamat' => 'required'
        ]);

        $pelanggan = new Pelanggan();
        $pelanggan->nama_pelanggan = $request->nama;
        $pelanggan->email_pelanggan = $request->email;
        $pelanggan->password_pelanggan = $request->password;
        $pelanggan->telp_pelanggan = $request->notelepon;
        $pelanggan->alamat_pelanggan = $request->alamat;
        if ($pelanggan->save()) {
            return redirect('/admin/pelanggan');
        }
    }

    public function delete(Request $request)
    {
        $pelanggan = Pelanggan::findOrFail($request->id_pelanggan);

        if ($pelanggan->delete()) {
            return redirect('/admin/pelanggan');
        }
    }
}
