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
        Schema::table('group_companies', function (Blueprint $table) {
            $table->text('description')->nullable(); // Descrição
            $table->date('started_at')->nullable(); // Data de criação
            $table->string('country'); // País
            $table->string('industry'); // Setor de atuação
            $table->decimal('annual_revenue', 12, 2); // Receita anual
            $table->string('website')->nullable(); // Site
            $table->string('contact')->nullable(); // Contato
            $table->string('status'); // Status
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('group_companies', function (Blueprint $table) {
            //
        });
    }
};
