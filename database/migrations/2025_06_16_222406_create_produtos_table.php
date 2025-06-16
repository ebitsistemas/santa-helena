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
        Schema::create('produtos', function (Blueprint $table) {
            Schema::create('produtos', function (Blueprint $table) {
                $table->id(); // Coluna de ID auto-incremental
                $table->string('nome'); // Coluna para o nome do produto
                $table->string('imagem'); // Coluna para o caminho da imagem
                $table->timestamps(); // Colunas created_at e updated_at
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
