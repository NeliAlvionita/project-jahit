<?php

namespace App\Http\Controllers;
use App\Pemesanan;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index(){
        $pemesanan = Pemesanan::all();
        return view('admin/pemesanan/index', ['pemesanan'=> $pemesanan]);
    }
    public function detail(Request $request)
   {
       $pemesanan = Pemesanan::find($request->id_pemesanan);
       return view('/admin/pemesanan/detail',  ['pemesanan'=> $pemesanan]);
   }
}
