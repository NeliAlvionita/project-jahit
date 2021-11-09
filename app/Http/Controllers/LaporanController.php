<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index(){
        $laporan = DB::table('pemesanan')
            ->join('pelanggan', 'pelanggan.id_pelanggan', '=', 'pemesanan.id_pelanggan')
            ->select('pemesanan.*', 'pelanggan.nama_pelanggan')
            ->get();
        return view('admin/laporan/index', ['laporan'=> $laporan]);
    }
}
