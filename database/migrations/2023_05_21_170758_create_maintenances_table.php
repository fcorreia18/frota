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
        Schema::create('maintenances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_type')->nullable();
            $table->unsignedBigInteger('id_vehicle');
            $table->string('ref', 45);
            $table->float('cost')->nullable();
            $table->integer('mileage')->nullable();
            $table->string('responsible', 45)->nullable();
            $table->string('payment_receipt', 100)->nullable();
            $table->date('date_scheduled')->nullable();
            $table->date('date_held')->nullable();
            $table->enum('status', ['scheduled', 'done']);
            $table->timestamps();

            $table->foreign('id_vehicle')->references('id')->on('vehicles')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('service_type')->references('id')->on('service_provider_services')->onDelete('set null')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintenances');
    }
};
