<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<h2 align="center">DAFTAR DATA GAGAL IMPORT</h2></br>
	<table>
		<thead>
			<tr>
				<th align="center">NO</th>
				<th align="center">DATA</th>
				<th align="center">KETERANGAN</th>
			</tr>
		</thead>
		<tbody>
		@if($tingkat_list->count() != NULL)
			<?php $i=0; ?>
			@foreach($tingkat_list as $tingkat)
			<tr>
				<td align="center">{{ ++$i }}</td>
				<td>{{ $tingkat->nama_pegawai }}</td>
				<td>{{ $tingkat->keterangan }}</td>
			</tr>
			@endforeach
		@else
			<tr align="center">
				<td colspan="3" align="center">Tidak Ada Data Error :)</td>
			</tr>
		@endif
		</tbody>
	</table>
</body>
</html>