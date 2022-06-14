<?php

namespace App\Http\Controllers;

use Request;
use DB;
use App\Siswa;
use App\Spp;
use App\Kelas;
use App\Petugas;
use App\pembayaran;

class PencarianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Request::get('q')=='') {
            $data['data']    = [];
        }else{
            $cari = Request::get('q');

            $query = DB::table('siswa')
            ->join('kelas','siswa.id_kelas','=','kelas.id_kelas')
            ->join('spp','spp.id_spp','=','spp.id_spp')
            ->join('pembayaran','spp.id_spp','=','pembayaran.id_spp')
            ->join('petugas','pembayaran.id_petugas','=','petugas.id_petugas')
            ->select('siswa.nama','pembayaran.id_pembayaran','siswa.nis','kelas.nama_kelas','kelas.kompetensi_keahlian','spp.nominal','pembayaran.bulan_dibayar','pembayaran.tahun_dibayar','pembayaran.jumlah_bayar','petugas.nama_petugas')

            ->where('siswa.nis','like','%'.$cari.'%')
            ->orWhere('siswa.nama','like','%'.$cari.'%')

            ->get();

            $data['data'] = $query;
        }

        // return response($data);

        return view('pembayaran.pencarian',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function cetak()

    {
          $query = DB::table('siswa')
            ->join('kelas','siswa.id_kelas','=','kelas.id_kelas')
            ->join('spp','spp.id_spp','=','spp.id_spp')
            ->join('pembayaran','spp.id_spp','=','pembayaran.id_spp')
            ->join('petugas','pembayaran.id_petugas','=','petugas.id_petugas')
            ->select('siswa.nama','pembayaran.id_pembayaran','siswa.nis','kelas.nama_kelas','kelas.kompetensi_keahlian','spp.nominal','pembayaran.bulan_dibayar','pembayaran.tahun_dibayar','pembayaran.jumlah_bayar','petugas.nama_petugas')

        ->where('siswa.nis', Request::get('q'))
        ->orWhere('siswa.nama', Request::get('q'))

        ->get();

        $data['data'] = $query;

        // return response($data);

        return view('pembayaran.cetak',$data);
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
