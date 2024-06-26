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
        Schema::create('jogos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255)->unique();
            $table->unsignedBigInteger('grupo_1_id')->nullable();
            $table->unsignedBigInteger('grupo_2_id')->nullable();
            $table->unsignedBigInteger('grupo_3_id')->nullable();
            $table->unsignedBigInteger('grupo_4_id')->nullable();
            $table->string('grupo_1_palavras', 255)->nullable();
            $table->string('grupo_2_palavras', 255)->nullable();
            $table->string('grupo_3_palavras', 255)->nullable();
            $table->string('grupo_4_palavras', 255)->nullable();
            $table->date('data');
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('jogos');
    }
};