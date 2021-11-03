<?php

namespace App\Http\Controllers;
use App\Pemesanan;
//use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index(){
        $pemesanan = Pemesanan::all();

        return view('admin/pemesanan/index', ['pemesanan'=> $pemesanan]);
    }
}
