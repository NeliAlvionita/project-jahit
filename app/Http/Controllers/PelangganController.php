<?php

namespace App\Http\Controllers;

use App\Pelanggan;
use App\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PelangganController extends Controller
{
    public function index(){
        $pelanggan = Pelanggan::all();

        return view('admin/pelanggan/index', ['pelanggan'=> $pelanggan]);
    }
    public function pelanggan(){
        return view('pelanggan.index');
    }
    public function pay(){
        $pembayaran = DB::table('pembayaran')
            ->join('pemesanan', 'pemesanan.id_pemesanan', '=', 'pembayaran.id_pemesanan')
            ->join('pelanggan', 'pelanggan.id_pelanggan', '=', 'pemesanan.id_pemesanan')
            ->select('pembayaran.*', 'pemesanan.id_pemesanan', 'pemesanan.total_pemesanan', 'pelanggan.nama_pelanggan')
            ->get();
        return view('pelanggan/pembayaran/index', ['pembayaran'=> $pembayaran]);
    }
    public function order(){
        $pemesanan = Pemesanan::all();
        return view('pelanggan/pemesanan/index', ['pemesanan'=> $pemesanan]);
    }
}
