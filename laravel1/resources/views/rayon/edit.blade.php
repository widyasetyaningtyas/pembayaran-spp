@extends('template.main')
@section('content')
<section class="content-header">
      <h1>
        Edit Data Rayon
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Data Rayon</li>
      </ol>
</section>
<section class="content">
	<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="{{url('/rayon/update/'.$rayon->id)}}" method="POST">
            	{{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Rayon</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_rayon" id="nama_rayon" placeholder="Nama Rayon" value="{{$rayon->nama_rayon}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Pembimbing</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="pembimbing" id="pembimbing" placeholder="Pembimbing" value="{{$rayon->pembimbing}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Jumlah Siswa</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jumlah_siswa" id="jumlah_siswa" placeholder="Jumlah Siswa" value="{{$rayon->jumlah_siswa}}">
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