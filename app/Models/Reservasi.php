<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;

    protected $fillable = ['id_kamar', 'id_pasien', 'tanggal_masuk', 'tanggal_keluar'];

    public function kamar()
    {
        return $this->belongsTo(Kamar::class);
    }

    public function Pasien()
    {
        return $this->belongsTo(Pasien::class);
    }
}
