<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = "pelanggan";
    protected $primaryKey = "id_pelanggan";
    protected $fillable = ["nama_pelanggan","", "email_pelanggan", "password_pelanggan", "telp_pelanggan", "alamat_pelanggan"];

    public $timestamps = false;
}
