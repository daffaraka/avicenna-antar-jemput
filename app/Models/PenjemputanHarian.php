<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenjemputanHarian extends Model
{
    use HasFactory;

     protected $fillable = [
        'pic_id',
        'siswa_id',
        'nama_penjemput',
        'waktu_dijemput',
        'confirm_pic_at',
        'confirm_satpam_at',
    ];


    public function siswa()
    {
        return $this->belongsTo(Siswa::class,'siswa_id');
    }


    public function pic()
    {
        return $this->belongsTo(User::class, 'pic_id');
    }
}
