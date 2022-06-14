@extends('template.main')
@section('content')
	<section class="content-header">
	      <h1>
	        Siswa
	        <small>Control panel</small>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active">Siswa</li>
	      </ol>
	</section>
	<section class="content">
		 <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Siswa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
            	<a href="{{url('/siswa/create')}}" class="btn btn-primary" style="margin:10px;">Tambah Data Siswa</a>
              <table class="table table-striped">
                <tr>
                  <th>No</th>
                  <th>NIS</th>
                  <th>Nama</th>
                  <th>Rombel</th>
                  <th>Rayon</th>
                  <th>Aksi</th>
                </tr>
                @foreach ($siswa as $data)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$data->nis}}</td>
                  <td>{{$data->nama}}</td>
                  <td>{{$data->rombel}}</td>
                  <td>{{$data->rayon}}</td>
                  <td>
                  	<a href="{{url('/siswa/edit/'.$data->id)}}" class="btn btn-sm btn-warning">Edit</a>
                  	<a href="{{url('/siswa/destroy/'.$data->id)}}" class="btn btn-sm btn-danger">Hapus</a>
                  </td>
                </tr>
                @endforeach
               </table>
              </div>
            <!-- /.box-body -->
          </div>
	</section>
@endsection