<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sertifikat extends Model
{
    use HasFactory;

    protected $fillable = [
        'company',
        'kepsek',
        'kaprok',
        'tempat',
        'tgl_sertifikat',
        'gambar_sertifikat',
        'gambar_kepsek',
        'gambar_kaprok',
    ];
}
