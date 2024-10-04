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
        Schema::create('medical_consultation_part1s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('courseDesination');
            $table->date('date');
            $table->string('surname');
            $table->string('firstName');
            $table->string('middleName')->nullable();
            $table->string('nameExt')->nullable();
            $table->date('birthDate');
            $table->string('sex');
            $table->string('age');
            $table->string('address');
            $table->string('nationality');
            $table->string('religion');
            $table->string('cellphoneNumber');
            $table->string('email')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_consultation_part1s');
    }
};
