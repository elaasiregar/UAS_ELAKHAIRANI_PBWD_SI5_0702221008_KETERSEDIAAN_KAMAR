<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('tingkat_kamars', function (Blueprint $table) {
            $table->id('tingkat_kamar_id');
            $table->foreignId('rumah_sakit_id')->constrained('rumah_sakits');
            $table->string('nama_tingkat');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tingkat_kamars');
    }
};
