@extends('template.main')
@section('content')
<section class="content-header">
	      <h1>
	        Petugas
	        <small>Control panel</small>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active">Petugas</li>
	      </ol>
	</section>
	<section class="content">
		 <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Petugas</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
            	<a href="{{url('/petugas/create')}}" class="btn btn-primary" style="margin:10px;">Tambah Data Petugas</a>
              <table class="table table-striped">
                <tr>
                  <th>No</th>
                  <th>ID Petugas</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Nama Petugas</th>
                  <th>Level</th>
                  <th>Aksi</th>
                </tr>
                @foreach ($petugas as $data)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$data->id_petugas}}</td>
                  <td>{{$data->username}}</td>
                  <td>{{$data->password}}</td>
                  <td>{{$data->nama_petugas}}</td>
                  <td>{{$data->level}}</td>
                  <td>
                  	<a href="{{url('/petugas/edit/'.$data->id_petugas)}}" class="btn btn-sm btn-warning">Edit</a>
                  	<a href="{{url('/petugas/destroy/'.$data->id_petugas)}}" class="btn btn-sm btn-danger">Hapus</a>
                  </td>
                </tr>
                @endforeach
               </table>
              </div>
            <!-- /.box-body -->
          </div>
	</section>
@endsection