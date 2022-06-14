@extends('template.main')
@section('content')
<section class="content-header">
	      <h1>
	        Rayon
	        <small>Control panel</small>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active">Rayon</li>
	      </ol>
	</section>
	<section class="content">
		 <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Rayon</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
            	<a href="{{url('/rayon/create')}}" class="btn btn-primary" style="margin:10px;">Tambah Data Rayon</a>
              <table class="table table-striped">
                <tr>
                  <th>No</th>
                  <th>Nama Rayon</th>
                  <th>Pembimbing</th>
                  <th>Jumlah Siswa</th>
                  <th>Aksi</th>
                </tr>
                @foreach ($rayon as $data)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$data->nama_rayon}}</td>
                  <td>{{$data->pembimbing}}</td>
                  <td>{{$data->jumlah_siswa}}</td>
                  <td>
                  	<a href="{{url('/rayon/edit/'.$data->id)}}" class="btn btn-sm btn-warning">Edit</a>
                  	<a href="{{url('/rayon/destroy/'.$data->id)}}" class="btn btn-sm btn-danger">Hapus</a>
                  </td>
                </tr>
                @endforeach
               </table>
              </div>
            <!-- /.box-body -->
          </div>
	</section>
@endsection