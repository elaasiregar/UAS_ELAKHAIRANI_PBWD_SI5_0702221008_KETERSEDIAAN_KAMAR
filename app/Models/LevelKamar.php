<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelKamar extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function LevelKamar()
    {
        return $this->hasMany(LevelKamar::class);
    }
}
