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
        Schema::create('abalones', function (Blueprint $table) {
            $table->id();
            $table->string('sex');
            $table->float('length', 8, 3);
            $table->float('diameter', 8, 3);
            $table->float('height', 8, 3);
            $table->float('whole_weight', 8, 4);
            $table->float('shucked_weight', 8, 4);
            $table->float('viscera_weight', 8, 4);
            $table->float('shell_weight', 8, 4);
            $table->integer('rings');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abalones');
    }
};
