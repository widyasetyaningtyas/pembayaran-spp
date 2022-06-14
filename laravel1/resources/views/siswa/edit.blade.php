@extends('template.main')
@section('content')
<section class="content-header">
      <h1>
        Edit Data Siswa
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Data Siswa</li>
      </ol>
</section>
<section class="content">
	<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="{{url('/siswa/update/'.$siswa->id)}}" method="POST">
            	{{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">NIS</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nis" id="nis" placeholder="NIS" value="{{$siswa->nis}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="{{$siswa->nama}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Rombel</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="rombel" id="rombel" placeholder="Rombel" value="{{$siswa->rombel}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Rayon</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="rayon" id="rayon" placeholder="Rayon" value="{{$siswa->rayon}}">
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