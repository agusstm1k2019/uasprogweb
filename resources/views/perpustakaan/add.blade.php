@extends('layouts.app')
@section('content')
<div class="container">
	<h3 style="color:red">TAMBAH DATA BUKU </h3>
	<form method="post"action="{{ url('/perpustakaan') }}">
		@csrf
		<table style="color:orange;">
			<tr>
				<td>JUDUL BUKU</td>
				<td><input type="text" name="judul_buku"></td>
			</tr>
			<tr>
				<td>PENERBIT</td>
				<td><input type="text" name="penerbit_buku"></td>
			</tr>
			<tr>
				<td>TAHUN</td>
				<td><input type="text" name="tahun_buku"></td>
			</tr>
			<tr>
				<td>JENIS BUKU</td>
				<td>
				<select name="jenis_buku" id="jenis_buku" style="color:skyblue;">			
					@foreach($jenis_rows as $row)
					  <option value="{{ $row->nama_jenis_buku }}">{{ $row->nama_jenis_buku }}</option>
					@endforeach
				</select>
			</td>
			</tr>
			<tr>
				<td>LOKASI BUKU</td>
				<td><input type="text" name="lokasi_buku"></td><td></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN" style="color:red;"></td>
			</tr>
		</table>
	</form>
</div>
@endsection
