@extends('template.main')
@section('content')
	<section class="content-header">
	      <h1>
	        Pembayaran
	        <small>Control panel</small>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active">Pembayaran</li>
	      </ol>
	</section>
	<section class="content">
		 <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pembayaran</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
            	<a href="{{url('/pembayaran/create')}}" class="btn btn-primary" style="margin:10px;">Tambah Data Pembayaran</a>
              <a href="{{url('pencarian')}}" class="btn btn-info" style="margin: 10px;">Pencarian</a>
              <table class="table table-striped">
                <tr>
                  <th>No</th>
                  <th>ID Pembayaran</th>
                  <th>NISN</th>
                  <th>Tanggal Bayar</th>
                  <th>Bulan</th>
                  <th>Tahun</th>
                  <th>Jumlah Bayar</th>
                  <th>Aksi</th>
                </tr>
                @foreach ($pembayaran as $data)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$data->id_pembayaran}}</td>
                  <td>{{$data->nisn}}</td>
                  <td>{{$data->tgl_bayar}}</td>
                  <td>{{$data->bulan_dibayar}}</td>
                  <td>{{$data->tahun_dibayar}}</td>
                  <td>{{$data->jumlah_bayar}}</td>
                  <td>
                  	<a href="{{url('/pembayaran/destroy/'.$data->id)}}" class="btn btn-sm btn-danger">Hapus</a>
                  </td>
                </tr>
                @endforeach
               </table>
              </div>
            <!-- /.box-body -->
          </div>
	</section>
@endsection