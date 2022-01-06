<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_perangkat_daerah', 'nama_pemimpin', 'alamat_kantor', 'telepon', 
        'email', 'nama_pengelola', 'nomor_pengelola', 'email_pengelola'
    ];
}
