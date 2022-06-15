@extends('layouts.app')

@section('content')

<div class="container">
<h3 style="color: red;">DAFTAR BUKU DIPERPUSTAKAAN</h3>
<form class="form" method="get" action="{{ route('search') }}">
		    <div class="form-group w-25 mb-3">
		        <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Masukkan keyword">
		        <button type="submit" class="btn btn-info mb-1">CARI</button>
		    </div>
		</form>
	<table>
	<tr>
		<td style="color:red">JUDUL BUKU</td><td></td>
		<td style="color:red">PENERBIT</td><td></td>
		<td style="color:red">TAHUN</td><td></td>
		<td style="color:red">JENIS BUKU</td><td></td>
		<td style="color:red">LOKASI BUKU</td>
		<td></td><td></td>
		<td><a href="{{ url('perpustakaan/create') }}" style="color:lightskyblue;">TAMBAH DATA BUKU</a></td><td></td>
	</tr>
	@foreach($rows as $row)
	<tr>
		<td>{{ $row->judul_buku }}</td><td></td>
		<td>{{ $row->penerbit_buku }}</td><td></td>
		<td>{{ $row->tahun_buku }}</td><td></td>
		<td>{{ $row->jenis_buku }}</td><td></td>
		<td>{{ $row->lokasi_buku }}</td><td></td>
		<td><a href="{{ url('perpustakaan/' . $row->id_buku . '/edit') }}" style="color:olive;">Edit</a></td><td></td>
		<td><a href="{{ url('perpustakaan/' . $row->id_buku . '/lihat') }}" style="color:orange;">Lihat</a></td><td></td>
		<td>
			<form action="{{ url('perpustakaan/' . $row->id_buku) }}" method="POST">
			<input name="_method" type="hidden" value="DELETE">
			@csrf
			<button style="color:blue;">Hapus</button>
			<td>
		
		</td>
			</form>			
		</td>
	</tr>
	@endforeach
	</table>
</div>
@endsection