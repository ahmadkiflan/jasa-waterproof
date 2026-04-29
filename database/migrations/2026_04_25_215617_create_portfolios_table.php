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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->constrained(); // relasi ke services
            $table->string('title');                        // judul proyek
            $table->text('description')->nullable();        // deskripsi proyek
            $table->string('image_before');                 // foto sebelum
            $table->string('image_after');                  // foto sesudah
            $table->string('location')->nullable();         // lokasi proyek
            $table->boolean('is_active')->default(true);    // tampil/sembunyi
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
