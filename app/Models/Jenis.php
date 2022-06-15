<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    protected $table = "jenis";

    protected $primaryKey = 'id_jenis_buku';

    protected $fillable = ['nama_jenis_buku'];
}