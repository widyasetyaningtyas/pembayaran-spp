@extends('template.main')
@section('content')
<section class="content-header">
      <h1>
        Tambah Data Siswa
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tambah Data Siswa</li>
      </ol>
</section>
<section class="content">
	<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="{{url('/siswa/store')}}" method="POST">
            	{{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">NISN</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nisn" id="nisn" placeholder="NISN">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">NIS</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nis" id="nis" placeholder="NIS">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Kelas</label>

                  <div class="col-sm-10">
                    <select name="id_kelas" class="form-control" id="id_kelas">
                      <option>Pilih Data Kelas</option>
                      @foreach ($kelas as $data)
                        <option value="{{$data->id_kelas}}">{{$data->nama_kelas}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">No Telp</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="No Telp">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Tahun Masuk</label>

                  <div class="col-sm-10">
                    <select name="id_spp" class="form-control" id="id_spp" placeholder="Pilih Tahun">
                      <option>Pilih Tahun</option>
                      @foreach ($spp as $data)
                        <option value="{{$data->id_spp}}">{{$data->tahun}}</option>
                      @endforeach
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