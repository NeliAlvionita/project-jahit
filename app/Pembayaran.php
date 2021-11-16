<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = "pembayaran";
    protected $primaryKey = "id_pembayaran";
    protected $fillable = ["id_pemesanan", "bank", "bukti"];

    public function pelanggan(){
        return $this-> belongsTo('App\Pelanggan', 'id_pelanggan', 'id_pelanggan');
    }
}



