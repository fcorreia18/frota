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
        Schema::create('supplier_service_company', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_service_provider');
            $table->unsignedBigInteger('id_service');
            $table->unsignedBigInteger('id_company');
            $table->float('cost');
            $table->timestamps();

            $table->foreign('id_service_provider')->references('id')->on('service_providers')->onDelete('cascade');
            $table->foreign('id_service')->references('id')->on('services')->onDelete('cascade');
            $table->foreign('id_company')->references('id')->on('companies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supplier_service_company');
    }
};
