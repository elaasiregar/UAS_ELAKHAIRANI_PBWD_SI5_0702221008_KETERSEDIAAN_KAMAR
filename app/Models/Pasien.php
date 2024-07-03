<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'tanggal_lahir'];

    public function Reservasi()
    {
        return $this->hasMany(Reservasi::class);
    }
}
