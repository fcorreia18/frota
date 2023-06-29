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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_company');
            $table->string('brand', 255);
            $table->string('model', 255);
            $table->string('color', 45);
            $table->string('license_plate', 45);
            $table->date('year');
            $table->float('mileage');
            $table->string('description', 200)->nullable();
            $table->enum('status', ['assigned', 'pending', 'released']);
            $table->timestamps();

            $table->foreign('id_company')->references('id')->on('companies')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
