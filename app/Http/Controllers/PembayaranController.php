<?php

namespace App\Http\Controllers;

use Request;
use App\Pembayaran;
use App\Siswa;
use App\Kelas;
use App\Spp;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function NoPembayaran(){
        $tgl = date('Y-m-d');
        $number = Pembayaran::where("created_at","like","%".$tgl."%")->count();
        $angka = $number +1;
        $codes = str_pad($angka, 5, rand(11111,99999), STR_PAD_LEFT);
        $code = 'SPP-'.date('ymd').$codes;
        return $code;
    }


    public function index()
    {
        $data['pembayaran']= Pembayaran::get();
        return view('pembayaran.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['nomat'] = self::NoPembayaran();
        return view('pembayaran.create',$data);
        
        $id = Pembayaran::orderBy('created_at','desc')->first();

        if (empty($id)) {
            $data['id'] = 1;
        }else{
            $data['id'] = $id->id_pembayaran + 1;
        }
        return view('pembayaran.create',$data);
    }

    // public function ajax(Request $request)
    // {
    //     $data['siswa'] = Siswa::where('nisn', $request->get('nisn'))->first();
    //     $data['kelas'] = Kelas::find($data['siswa']->id_kelas);
    //     $data['spp'] = Spp::find($data['siswa']->id_spp);
    //     $data['spp'] = Spp::find($data['siswa']->id_spp);

    //     $spp = Spp::find($data['siswa']->id_kelas);
    //     $startYear = $spp->tahun;
    //     $endYear = date('Y');
    //     $amountMonth

    //     return $data;
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_pemb = new \App\Pembayaran;
        $new_pemb->id_pembayaran = self::NoPembayaran();
        $new_pemb->id_petugas = ('1');
        $new_pemb->nisn = Request::get('nisn');
        $new_pemb->tgl_bayar = Request::get('tgl_bayar');
        $new_pemb->bulan_dibayar = Request::get('bulan_dibayar');
        $new_pemb->tahun_dibayar = Request::get('tahun_dibayar');
        $new_pemb->id_spp = Request::get('id_spp');
        $new_pemb->jumlah_bayar = Request::get('jumlah_bayar');
        $new_pemb->save();
        return redirect('pembayaran');
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
        $pembayaran =Pembayaran::find($id)->delete();
        return redirect('pembayaran');
    }

    public function cari(){
        $id = Request::get('id');
        if ($id=='') {
            $data['val'] = 2;
        }else{
            $isi = Siswa::with('Kelas')->where('nisn','=',$id)->first();
            if (empty($isi)) {
                $data['val'] = 0;
            }else{
                $data['val'] = 1;
                $data['data'] = $isi;
            }
        }

        return response($data);
    }

    public function cary(){
        $id = Request::get('id');
        if ($id=='') {
            $data['val'] = 2;
        }else{
            $isi = Spp::with('spp')->where('tahun','=',$id)->first();
            if (empty($isi)) {
                $data['val'] = 0;
            }else{
                $data['val'] = 1;
                $data['data'] = $isi;
            }
        }

        return response($data);
    }
}
