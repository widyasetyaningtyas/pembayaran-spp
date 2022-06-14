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
                  <label for="inputEmail3" class="col-sm-2 control-label">NISN</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nisn" id="nisn" placeholder="NISN" value="{{$siswa->nisn}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">NIS</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nis" id="nis" placeholder="NIS" value="{{$siswa->nis}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="{{$siswa->nama}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Kelas</label>

                  <div class="col-sm-10">
                    <select name="id_kelas" class="form-control" id="id_kelas" placeholder="Pilih Data Kelas" value="{{$siswa->id_kelas}}">
                      <option>Pilih Data Kelas</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="alamat" value="{{$siswa->alamat}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">No Telp</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="No Telp" value="{{$siswa->no_telp}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Tahun Masuk</label>

                  <div class="col-sm-10">
                    <select name="id_spp" class="form-control" id="id_spp" placeholder="Pilih Tahun" value="{{$siswa->id_spp}}">
                      <option>Pilih Tahun</option>
                      <option value="12">2019</option>
                      <option value="13">2020</option>
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