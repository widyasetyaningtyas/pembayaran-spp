<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spp extends Model
{
    protected $table='spp';
    protected $primaryKey='id_spp';
    public  $timestamps = false;
    protected $fillable=array('id_spp','tahun','nominal');

    public function siswa(){
    	return $this->hasMany('App\Siswa','id');
    }

    public function spp(){
    	return $this->belongsTo('App\Spp','id_spp');
    }

}
