<?php

namespace App\Http\Controllers;
use App\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PembayaranController extends Controller
{
    public function index(){
        $pembayaran = DB::table('pembayaran')
            ->join('pemesanan', 'pemesanan.id_pemesanan', '=', 'pembayaran.id_pemesanan')
            ->join('pelanggan', 'pelanggan.id_pelanggan', '=', 'pemesanan.id_pemesanan')
            ->select('pembayaran.*', 'pemesanan.id_pemesanan', 'pemesanan.total_pemesanan', 'pelanggan.nama_pelanggan')
            ->get();
        return view('admin/pembayaran/index', ['pembayaran'=> $pembayaran]);
    }
    public function detail(Request $request){
        $pembayaran = Pembayaran::find($request->id_pembayaran);
        $pembayaran = DB::table('pembayaran')
            ->join('pemesanan', 'pemesanan.id_pemesanan', '=', 'pembayaran.id_pemesanan')
            ->join('pelanggan', 'pelanggan.id_pelanggan', '=', 'pemesanan.id_pemesanan')
            ->select('pembayaran.*', 'pemesanan.id_pemesanan', 'pemesanan.total_pemesanan', 'pelanggan.nama_pelanggan')
            ->get();
        return view('admin/pembayaran/detail', ['pembayaran'=> $pembayaran]);
    }
}
