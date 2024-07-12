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
        Schema::table('comics', function (Blueprint $table) {
            $table->string('title', 60);
            $table->text('description')->nullable();
            $table->float('price', 4, 2)->unsigned();
            $table->string('series', 50)->nullable();
            $table->string('sale_date', 100)->nullable();
            $table->string('type', 30);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comics', function (Blueprint $table) {
            $table->dropColumn('agency');
            $table->dropColumn('description');
            $table->dropColumn('price');
            $table->dropColumn('series');
            $table->dropColumn('sale_date');
            $table->dropColumn('type');
        });
    }
};
