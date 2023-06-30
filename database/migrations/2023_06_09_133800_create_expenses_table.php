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
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_project');
            $table->unsignedBigInteger('id_vehicle');
            $table->float('amount');
            $table->enum('type', ['incident', 'maintenance', 'supply']);
            $table->date('date');
            $table->timestamps();

            $table->foreign('id_project')->references('id')->on('projects')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_vehicle')->references('id')->on('vehicles')->onDelete('cascade')->onUpdate('cascade');

        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
