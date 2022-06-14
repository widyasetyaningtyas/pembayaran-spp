<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table='pembayaran';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable = array('id_pembayaran','id_petugas','nisn','tgl_bayar','bulan_dibayar','tahun_dibayar','id_spp','jumlah_bayar',);
}
