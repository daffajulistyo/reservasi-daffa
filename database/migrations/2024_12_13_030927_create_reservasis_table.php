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
        Schema::create('reservasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_kamar')->constrained('kamars')->onDelete('cascade'); // Pastikan nama tabel 'kamars' benar
            $table->string('nama_pelanggan');
            $table->date('tanggal_checkin');
            $table->date('tanggal_checkout');
            $table->decimal('total_biaya', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservasis');
    }
};
