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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_employee');
            $table->dateTime('scheduled_time');
            $table->time('departure');
            $table->string('destination', 100);
            $table->text('purpose');
            $table->enum('status', ['scheduled', 'ongoing', 'canceled', 'released']);
            $table->timestamps();

            $table->foreign('id_employee')->references('id')->on('employees')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
