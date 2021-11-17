<?php

namespace App\Http\Controllers;

use App\Produk;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $produk = Produk::all();
        return view('welcome.home',['produk'=> $produk]);
    }
}
