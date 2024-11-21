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
       
        Schema::table('actuality', function (Blueprint $table) {
            $table->timestamp('created_at')->nullable(); // Ajoute la colonne created_at
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('actuality', function (Blueprint $table) {
            //
        });
    }
};
