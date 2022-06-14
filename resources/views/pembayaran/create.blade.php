@extends('template.main')
@section('content')
<section class="content-header">
      <h1>
        Edit Data Pembayaran
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Data Pembayaran</li>
      </ol>
</section>
<section class="content">
	<div class="box">
        <div class="box-body">
        	<div class="row">
        		<form action="{{url('/pembayaran/store')}}"method="POST">
                    {{csrf_field()}}
        			<div class="col-md-6">
        			<div class="form-group">
        				<label>Id Pembayaran</label>
        				<input type="text" name="id_pembayaran" class="form-control" value="{{$nomat}}">
        			</div>
        			<div class="form-group">
        				<label>Tanggal</label>
        				<input type="text" name="tgl_bayar" class="form-control" value="{{date('Y-m-d')}}">
        			</div>
        			<div class="form-group">
        				<label>NISN</label>
        				<input type="text" name="nisn" class="form-control" id="nisn" onkeyup="Siswa()">
        			</div>
        			<div class="form-group">
        				<label>Nama</label>
        				<input type="text" name="nama" class="form-control" id="nama">
        			</div>
        			<div class="form-group">
        				<label>Kelas</label>
        				<input type="text" name="kelas" class="form-control" id="kelas">
        			</div>
        		</div>
        		<div class="col-md-6">
        			<div class="form-group">
        				<label>Bulan Bayar</label>
        				<select class="form-control" name="bulan_dibayar">
        					<option value="Januari">Januari</option>
        					<option value="Febuari">Febuari</option>
        					<option value="Maret">Maret</option>
        					<option value="April">April</option>
        					<option value="Mei">Mei</option>
        					<option value="Juni">Juni</option>
        					<option value="Juli">Juli</option>
        					<option value="Agustus">Agustus</option>
        					<option value="September">September</option>
        					<option value="Oktober">Oktober</option>
        					<option value="November">November</option>
        					<option value="Desember">Desember</option>
        				</select>
        			</div>
        			<div class="form-group">
        				<label>Tahun</label>
        				<input type="text" name="tahun_dibayar" class="form-control" id="tahun" onkeyup="Spp()">
        			</div>
        			<div class="form-group">
        				<label>Nominal</label>
        				<input type="text" name="jumlah_bayar" class="form-control" id="nominal">
        			</div>
        			<input type="hidden" name="id_petugas" id="petugas">
        			<input type="hidden" name="id_spp" id="id_spp">
        		</div>
        		<div class="box-footer">
        			<button type="submit" class="btn btn-default">Cancel</button>
        			<button type="submit" class="btn btn-info pull-right">Simpan</button>
        		</div>
        		</form>
        	</div>
        </div>
    </div>
</section>
@endsection

@push('js')
<script type="text/javascript">
    function Siswa(){
        iddd = $("#nisn").val()
        if (iddd==''){
            $('#nama').val('');
            $('#kelas').val('');
        }
        $.ajax({
            url:"{{route('cari')}}",
            type:"GET",
            dataType:"json",
            data:{
                id:$("#nisn").val()
            },
            success: function(hasil) {
               if(hasil.val==0) {
                //alert('data tidak ditemukan');
                $('#nama').val('');
                $('#kelas').val('');

                }else if(hasil.val==2){
                //alert('data tidak ditemukan 2');
                $('#nama').val('');
                $('#kelas').val('');
                }else{
                //alert('data tidak ditemukan 3');
                $('#nama').val(hasil.data.nama);
                $('#kelas').val(hasil.data.kelas.nama_kelas);
                }
            } 
        });
    }            
</script>
<script type="text/javascript">
    function Spp(){
        iddd = $("#tahun").val()
        if (iddd==''){
            $('#nominal').val('');
        }
        $.ajax({
            url:"{{route('cary')}}",
            type:"GET",
            dataType:"json",
            data:{
                id:$("#tahun").val()
            },
            success: function(hasil) {
               if(hasil.val==0) {
                //alert('data tidak ditemukan');
                $('#nominal').val('');

                }else if(hasil.val==2){
                //alert('data tidak ditemukan 2');
                $('#nominal').val('');
                }else{
                //alert('data tidak ditemukan 3');
                $('#nominal').val(hasil.data.nominal);
                $('#id_spp').val(hasil.data.id_spp);
                }
            } 
        });
    }            
</script>
@endpush