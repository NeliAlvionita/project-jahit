<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $table = "pemesanan";
    protected $primaryKey = "id_pemesanan";
    protected $fillable = ["id_pelanggan", "tanggal_pemesanan", "total_pemesanan", "alamat_pemesanan", "status_pemesanan"];

    public $timestamps = false;

    public function pelanggan(){
        return $this-> belongsTo('App\Pelanggan', 'id_pelanggan', 'id_pelanggan');
    }
}
