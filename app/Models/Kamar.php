<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    protected $fillable = ['nomor_kamar', 'nomor_id_kamar', 'is_available'];

    public function LevelKamar()
    {
        return $this->belongsTo(LevelKamar::class);
    }

    public function Reservasi()
    {
        return $this->hasMany(Reservasi::class);
    }
}
