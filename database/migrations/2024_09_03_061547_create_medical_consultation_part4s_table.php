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
        Schema::create('medical_consultation_part4s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('asthma')->nullable();
            $table->string('bronchitis')->nullable();
            $table->string('chickenPox')->nullable();
            $table->string('epilepsy')->nullable();
            $table->string('gastritis')->nullable();
            $table->string('heartDisease')->nullable();
            $table->string('hypertension')->nullable();
            $table->string('measles')->nullable();
            $table->string('muscleSpasm')->nullable();
            $table->string('pneumonia')->nullable();
            $table->string('skinAllergy')->nullable();
            $table->string('tonsilitis')->nullable();
            $table->string('tuberculosis')->nullable();
            $table->string('uti')->nullable();
            $table->string('part4Others')->nullable();
            $table->longText('part4OthersSpecify')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_consultation_part4s');
    }
};
