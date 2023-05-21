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
        Schema::create('vehicle_docs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_vehicle');
            $table->string('insurence', 45);
            $table->date('renew_insurence')->nullable();
            $table->string('circulation_tax', 45);
            $table->date('renew_circulation_tax')->nullable();
            $table->string('car_registration', 45);
            $table->date('renew_car_registration')->nullable();
            $table->string('title_deed', 45);
            $table->date('renew_title_deed')->nullable();
            $table->string('credential', 45);
            $table->timestamps();

            $table->foreign('id_vehicle')->references('id')->on('vehicles')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle_docs');
    }
};
