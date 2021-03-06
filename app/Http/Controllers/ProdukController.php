<?php

namespace App\Http\Controllers;

use App\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::all();

        return view('admin/produk/index', ['produk' => $produk]);
    }

    public function add()
    {
        return view('admin/produk/addproduk');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'harga' => 'required|numeric',
            'foto' => 'required|image',
            'deskripsi' => 'required'
        ]);
        $upload_foto = $request->foto->store('produk');

        $produk = new Produk();
        $produk->nama_produk = $request->nama;
        $produk->harga_produk = $request->harga;
        $produk->foto_produk = $upload_foto;
        $produk->deskripsi_produk = $request->deskripsi;
        if ($produk->save()) {
            return redirect('/admin/produk');
        }
    }

    public function ubah(Request $request)
    {
        $produk = Produk::find($request->id_produk);
        return view('/admin/produk/ubahproduk',  ['produk' => $produk]);
    }
    public function update(Request $request)
    {
        // dd($request->id_produk);
        // $this->validate($request, [
        //     'nama' => 'required',
        //     'harga' => 'required|numeric',
        //     'foto' => 'required|image'
        // ]);

        $produk = Produk::findOrFail($request->id_produk);
        $produk->nama_produk = $request->nama;
        $produk->harga_produk = $request->harga;
        if (!empty($request->foto)) {
            $produk->foto_produk = $request->foto;
        }
        if (!empty($request->deskripsi)) {

            $produk->deskripsi_produk = $request->deskripsi;
        }
        $produk->save();

        return redirect('/admin/produk');
    }

    public function delete(Request $request)
    {
        $produk = Produk::findOrFail($request->id_produk);

        if ($produk->delete()) {
            return redirect('/admin/produk');
        }
    }

    public function show(Request $request)
    {
        $produk = Produk::find($request->id_produk);
        return view('/admin/produk/ubahproduk',  ['produk' => $produk]);
    }
}
