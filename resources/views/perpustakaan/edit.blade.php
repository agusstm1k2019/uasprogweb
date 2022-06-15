@extends('layouts.app')
@section('content')
<div class="container"> 
<h3 style="color:red;">EDIT DATA BUKU</h3>
    <form action="{{ url('/perpustakaan/' . $row->id_buku) }}" method="POST">
    <input name="_method" type="hidden" value="PATCH"> 
    @csrf
        <table style="color:orange;">
            <tr>
                <td>JUDUL BUKU</td>
                <td><input type="text" name="judul_buku" value="{{ $row->judul_buku }}"></td>
            </tr>
            <tr>
                <td>PENERBIT</td><td><input type="text" name="penerbit_buku" value="{{ $row->penerbit_buku }}"></td>
            </tr>
            <tr>
                <td>TAHUN</td><td><input type="text" name="tahun_buku" value="{{ $row->tahun_buku }}"></td>
            </tr>
            <tr>
                <td>JENIS BUKU</td><td><input type="text" name="jenis_buku" value="{{ $row->jenis_buku }}"></td>
            </tr>

            <tr>
                <td>LOKASI BUKU</td><td><input type="text" name="lokasi_buku" value="{{ $row->lokasi_buku }}"></td>
                <td></td>
            </tr>
            <tr>
                <td></td><td><input type="submit" value="UPDATE" style="color: red;"></td>
            </tr>
        </table>
    </form>
</div>
@endsection