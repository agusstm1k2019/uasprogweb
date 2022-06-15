@extends('layouts.app')
@section('content')
<div class="container"> 
<h3 style="color:red">LIHAT DATA BUKU</h3>
	@csrf
		<table>
			<tr>
				<td style="color:orange;">JUDUL BUKU</td>
				<td>{{ $row->judul_buku }}</td>
			</tr>
			<tr>
				<td style="color:orange">PENERBIT</td><td>{{ $row->penerbit_buku }}</td>
			</tr>
			<tr>
				<td style="color:orange">TAHUN</td><td>{{ $row->tahun_buku }}</td>
			</tr>
			<tr>
				<td style="color:orange">JENIS BUKU</td><td>{{ $row->jenis_buku }}</td>
			</tr>
			<tr>
				<td style="color:orange">LOKASI BUKU</td><td>{{ $row->lokasi_buku }}</td>
			</tr>
		</table>
</div>
@endsection