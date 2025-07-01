<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('penduduks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_penduduk');
            $table->string('umur_penduduk');
            $table->string('jenis_kelamin_penduduk');
            $table->string('no_telp_penduduk');
            $table->string('alamat_penduduk');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('penduduks');
    }
};
