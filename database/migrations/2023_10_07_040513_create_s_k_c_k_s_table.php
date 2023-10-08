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
        Schema::create('skck', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->string('police_number');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('nik');
            $table->string('religion');
            $table->string('country');
            $table->date('birthday');
            $table->string('place_of_birth');
            $table->string('phone_number');
            $table->string('gender');
            $table->string('address');
            $table->enum('purposes_of', ['Melamar Pekerjaan', 'Pindah Alamat', 'Melanjutkan Pendidikan Lingkup Kecamatan']);
            $table->string('image');
            $table->integer('validity_period');
            $table->enum('status', ['Pending', 'Proses', 'Konfirmasi', 'Ditolak']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('s_k_c_k_s');
    }
};
