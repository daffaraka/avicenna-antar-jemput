<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'nama_siswa',
        'kelas',
        'nis',
        'nisn',
        'alamat',
        'nama_ayah',
        'nama_ibu',
    ];
}
