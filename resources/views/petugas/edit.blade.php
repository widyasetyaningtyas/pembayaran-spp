@extends('template.main')
@section('content')
<section class="content-header">
      <h1>
        Edit Data Petugas
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Data Petugas</li>
      </ol>
</section>
<section class="content">
	<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="{{url('/petugas/update/'.$petugas->id_petugas)}}" method="POST">
            	{{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">ID Petugas</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_petugas" id="id_petugas" placeholder="ID Petugas" value="{{$petugas->id_petugas}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Usernama</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="username" id="username" placeholder="Usernama" value="{{$petugas->username}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="{{$petugas->password}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Petugas</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_petugas" id="nama_petugas" placeholder="nama_petugas" value="{{$petugas->nama_petugas}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Level</label>

                  <div class="col-sm-10">
                    <select name="level" class="form-control" id="level" placeholder="Level">
                      <option>--pilih--</option>
                      <option value="admin">admin</option>
                      <option value="petugas">petugas</option>
                    </select>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Batal</button>
                <button type="submit" class="btn btn-info pull-right">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
</section>
@endsection