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
        Schema::create('pendaftar', function (Blueprint $table) {
            $table->integer('idpendaftar')->primary();
            $table->string('namalengkap', 35);
            $table->string('email', 35);
            $table->string('nohp', 15);
            $table->date('tgllahir');
            $table->string('alamat', 55);
            $table->string('namafakultas', 35);
            $table->string('namaprodi', 35);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftaran');
    }
};
