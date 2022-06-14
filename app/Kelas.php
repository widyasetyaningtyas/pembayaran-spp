<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table='kelas';
    protected $primaryKey='id_kelas';
    public  $timestamps = false;
    protected $fillable=array('id_kelas','nama_kelas','kompetensi_keahlian');

    public function siswa(){
    	return $this->hasMany('App\Siswa','id');
    }
}
