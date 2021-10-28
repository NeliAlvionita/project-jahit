<?php

namespace App\Http\Controllers;

use App\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){
        $produk = Produk::all();

        return view('admin/produk/index', ['produk'=> $produk]);
    }
    
    public function add(){
        return view('admin.produk.addproduk');
    }
}
