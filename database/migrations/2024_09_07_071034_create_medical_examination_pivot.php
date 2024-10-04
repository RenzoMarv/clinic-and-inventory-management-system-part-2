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
        Schema::create('medical_examination_pivot', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('Medical_1')->constrained('medical_examination_forms')->onDelete('cascade');
            $table->foreignId('Medical_2')->constrained('medical_examination_form2')->onDelete('cascade');
            $table->foreignId('Medical_3')->constrained('medical_examination_form3')->onDelete('cascade');
            $table->foreignId('Medical_4')->constrained('medical_examination_form4')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_medical_examination_pivot');
    }
};
