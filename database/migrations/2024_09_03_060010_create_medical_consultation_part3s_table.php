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
        Schema::create('medical_consultation_part3s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('bloodType');
            $table->string('weight');
            $table->string('height');
            $table->string('food')->nullable();
            $table->longText('foodSpecify')->nullable();
            $table->string('medicine')->nullable();
            $table->longText('medicineSpecify')->nullable();
            $table->string('part3Others')->nullable();
            $table->longText('part3OthersSpecify')->nullable();
            $table->string('historyOfAsthma');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_consultation_part3s');
    }
};
