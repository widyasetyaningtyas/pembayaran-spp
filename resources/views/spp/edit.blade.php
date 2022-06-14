@extends('template.main')
@section('content')
<section class="content-header">
      <h1>
        Edit Data SPP
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Data SPP</li>
      </ol>
</section>
<section class="content">
	<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="{{url('/spp/update/'.$spp->id_spp)}}" method="POST">
            	{{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">ID SPP</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_spp" id="id_spp" placeholder="ID SPP" value="{{$spp->id_spp}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Tahun</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tahun" id="tahun" placeholder="Tahun" value="{{$spp->tahun}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nominal</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nominal" id="nominal" placeholder="Nominal" value="{{$spp->nominal}}">
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