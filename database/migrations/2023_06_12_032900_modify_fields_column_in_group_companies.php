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
            $table->string('country')->nullable()->change();
            $table->string('industry')->nullable()->change();
            $table->string('annual_revenue')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('group_companies', function (Blueprint $table) {
            $table->dropColumn('country')->change();
            $table->dropColumn('industry')->change();
            $table->dropColumn('annual_revenue')->change();
        });
    }
};
