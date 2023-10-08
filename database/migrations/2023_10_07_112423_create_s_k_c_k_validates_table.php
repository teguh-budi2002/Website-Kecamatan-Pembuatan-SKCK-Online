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
        Schema::create('skck_validate_by', function (Blueprint $table) {
            $table->id();
            $table->foreignId('skck_id')->references('id')->on('skck');
            $table->string('signature_by');
            $table->string('signature');
            $table->boolean('good_behavior')->default(0);
            $table->boolean('is_criminal')->default(0);
            $table->boolean('is_join_banned_organization')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('s_k_c_k_validates');
    }
};
