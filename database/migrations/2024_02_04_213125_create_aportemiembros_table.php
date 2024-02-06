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
        Schema::create('aportemiembros', function (Blueprint $table) {
            $table->id();
            $table->foreignId('aporte_id')->constrained();
            $table->foreignId('miembro_id')->constrained();
            $table->foreignId('movimiento_id')->constrained();
            $table->date('fecha');
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aportemiembros');
    }
};
