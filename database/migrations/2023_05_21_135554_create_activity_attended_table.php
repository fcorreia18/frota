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
        Schema::create('activity_attended', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_vehicle');
            $table->unsignedBigInteger('id_employee');
            $table->unsignedBigInteger('id_activity');
            $table->timestamp('attendend_time');
            $table->timestamps();

            $table->foreign('id_vehicle')->references('id')->on('vehicles')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_employee')->references('id')->on('employees')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_activity')->references('id')->on('activities')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity_attended');
    }
};
