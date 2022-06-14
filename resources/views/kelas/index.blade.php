@extends('template.main')
@section('content')
	<section class="content-header">
	      <h1>
	        Kelas
	        <small>Control panel</small>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active">Kelas</li>
	      </ol>
	</section>
	<section class="content">
		 <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Kelas</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
            	<a href="{{url('/kelas/create')}}" class="btn btn-primary" style="margin:10px;">Tambah Data Kelas</a>
              <table class="table table-striped">
                <tr>
                  <th>No</th>
                  <th>ID Kelas</th>
                  <th>Nama Kelas</th>
                  <th>Kompetensi Keahlian</th>
                  <th>Aksi</th>
                </tr>
                @foreach ($kelas as $data)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$data->id_kelas}}</td>
                  <td>{{$data->nama_kelas}}</td>
                  <td>{{$data->kompetensi_keahlian}}</td>
                  <td>
                  	<a href="{{url('/kelas/edit/'.$data->id_kelas)}}" class="btn btn-sm btn-warning">Edit</a>
                  	<a href="{{url('/kelas/destroy/'.$data->id_kelas)}}" class="btn btn-sm btn-danger">Hapus</a>
                  </td>
                </tr>
                @endforeach
               </table>
              </div>
            <!-- /.box-body -->
          </div>
	</section>
@endsection