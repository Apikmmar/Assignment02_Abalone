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
        Schema::create('heart_failure_records', function (Blueprint $table) {
            $table->id();
            $table->integer('age');
            $table->string('anaemia', 3);
            $table->integer('creatinine_phosphokinase');
            $table->string('diabetes', 3);
            $table->integer('ejection_fraction');
            $table->integer('high_blood_pressure');
            $table->float('platelets');
            $table->float('serum_creatinine');
            $table->integer('serum_sodium');
            $table->string('sex', 5);
            $table->string('smoking', 3);
            $table->integer('time');
            $table->timestamps();
            $table->string('death_event', 3);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('heart_failure_records');
    }
};
