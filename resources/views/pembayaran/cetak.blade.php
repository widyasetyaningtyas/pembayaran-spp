<!DOCTYPE html>
<html>
<head>
	<title>Cetak</title>
</head>
<body onload="javascript:window.print()">

	<center>
		<table style="text-align: center;">
			<tr>
				<td><img src=""></td>
				<td style="font-family: sans-serif;text-align: center;">
					<div style="">
						<h2>Bukti Pembayaran SPP</h2>
						<h2>SMK Wikrama 1 Jepara</h2>
					</div>
					<p style="">JL. Kelet Ploso KM. 36, Kelet, Keling, Jepara, Jawa Tengah 59454</p>
				</td>
				<hr style="text-align: center">
				<td><img src=""></td>
			</tr>
		</table>
		<br>
		<table class="table table-hover table-striped table-bordered" cellspacing="0" width="100%" border="1">
			<thead>
				<tr>
					<th>No</th>
					<th>Id Pembayaran</th>
					<th>NIS</th>
					<th>Nama</th>
					<th>Kelas</th>
					<th>Bulan Bayar</th>
					<th>Jumlah Bayar</th>
				</tr>
			</thead>
			<tbody>
				@foreach($data as $j => $row)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>{{$row->id_pembayaran}}</td>
						<td>{{$row->nis}}</td>
						<td>{{$row->nama}}</td>
						<td>{{$row->nama_kelas}}</td>
						<td>{{$row->bulan_dibayar}}, {{ $row->tahun_dibayar}}</td>
						<td>{{$row->jumlah_bayar}}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<table style="text-align: center;">
			<tr>
				<td style="font-family: sans-serif;text-align: center;">
					<div style="text-align: right;float: right;margin-left: 500px;margin-top: 25px;">
						Jepara, {{date('Y-m-d')}}
					</div>
				</td>
			</tr>
		</table>
		<table style="text-align: center;">
			<tr>
				<td style="font-family: sans-serif;text-align: center;">
					<div style="text-align: center;float: right;margin-left: 520px;margin-top: 40px;">
						Petugas
					</div>
				</td>
			</tr>
		</table>
	</center>
</body>
</html>