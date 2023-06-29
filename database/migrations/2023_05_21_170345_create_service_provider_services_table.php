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
        Schema::create('service_provider_services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_service_provider');
            $table->unsignedBigInteger('id_service');
            $table->float('unit_cost')->nullable();
            $table->integer('qtd')->nullable();
            $table->timestamps();

            $table->foreign('id_service_provider')->references('id')->on('service_providers')->onDelete('cascade');
            $table->foreign('id_service')->references('id')->on('services')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_provider_services');
    }
};
