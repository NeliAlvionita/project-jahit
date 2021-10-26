<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = "produk";
    protected $primaryKey = "id_produk";
    protected $fillable = ["nama_produk","harga_produk", "foto_produk", "deskripsi_produk"];

    public $timestamps = false;
}
