@extends('template.main')
@section('content')
<section class="content-header">
      <h1>
        Edit Data Kelas
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Data Kelas</li>
      </ol>
</section>
<section class="content">
	<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="{{url('/kelas/update/'.$kelas->id_kelas)}}" method="POST">
            	{{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">ID Kelas</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_kelas" id="id_kelas" placeholder="ID Kelas" value="{{$kelas->id_kelas}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Kelas</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_kelas" id="nama_kelas" placeholder="Nama Kelas" value="{{$kelas->nama_kelas}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Kompetensi Keahlian</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="kompetensi_keahlian" id="kompetensi_keahlian" placeholder="kompetensi_keahlian" value="{{$kelas->kompetensi_keahlian}}">
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