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
        Schema::table('art', function (Blueprint $table) {
            $table->unsignedBigInteger('id_keahlian')->after('id');
            $table->foreign('id_keahlian')->references('id')->on('keahlian');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('art', function (Blueprint $table) {
            $table->dropForeign(['id_keahlian']);
            $table->dropColumn('id_keahlian');
        });
    }
};
