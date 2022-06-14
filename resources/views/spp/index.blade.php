@extends('template.main')
@section('content')
	<section class="content-header">
	      <h1>
	        SPP
	        <small>Control panel</small>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active">SPP</li>
	      </ol>
	</section>
	<section class="content">
		 <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data SPP</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
            	<a href="{{url('/spp/create')}}" class="btn btn-primary" style="margin:10px;">Tambah Data SPP</a>
              <table class="table table-striped">
                <tr>
                  <th>No</th>
                  <th>ID SPP</th>
                  <th>Tahun</th>
                  <th>Nominal</th>
                  <th>Aksi</th>
                </tr>
                @foreach ($spp as $data)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$data->id_spp}}</td>
                  <td>{{$data->tahun}}</td>
                  <td>{{$data->nominal}}</td>
                  <td>
                  	<a href="{{url('/spp/edit/'.$data->id_spp)}}" class="btn btn-sm btn-warning">Edit</a>
                  	<a href="{{url('/spp/destroy/'.$data->id_spp)}}" class="btn btn-sm btn-danger">Hapus</a>
                  </td>
                </tr>
                @endforeach
               </table>
              </div>
            <!-- /.box-body -->
          </div>
	</section>
@endsection