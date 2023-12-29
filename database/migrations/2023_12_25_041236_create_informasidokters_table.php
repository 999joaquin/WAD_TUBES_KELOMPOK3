<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('informasidokter', function (Blueprint $table) {
            $table->integer('idDokter');
            $table->unique('idDokter');
            $table->string('foto');
            $table->string('nama');
            $table->string('spesialis');
            $table->string('riwayatpendidikan');
            $table->string('penghargaan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasidokter');
    }
};
