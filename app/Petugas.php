<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $table='petugas';
    protected $primaryKey='id_petugas';
    public  $timestamps = false;
    protected $fillable=array('id_petugas','username','password','nama_petugas','level');
}
