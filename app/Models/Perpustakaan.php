<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perpustakaan extends Model
{
    protected $table = "tb_perpustakaan";
    protected $primaryKey = "id_buku";
    protected $fillable =['judul_buku', 'penerbit_buku', 'tahun_buku', 'jenis_buku','lokasi_buku'];
    use HasFactory;
}
