<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rayon extends Model
{
    protected $table='rayon';
    protected $primarykey='id';
    public  $timestamps = false;
    protected $fillable=array('nama_rayon','pembimbing','jumlah_siswa');
}
