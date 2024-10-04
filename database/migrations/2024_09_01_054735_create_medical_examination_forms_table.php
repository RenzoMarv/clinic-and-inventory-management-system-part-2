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
        Schema::create('medical_examination_forms', function (Blueprint $table) {
            $table->id();
            $table->string('docuControl');
            $table->string('lastName');
            $table->string('firstName');
            $table->string('middleName');
            $table->string('gender');
            $table->string('cellphoneNo');
            $table->string('address');
            $table->date('date');
            $table->string('birthday');
            $table->string('age');
            $table->string('civilStatus');
            $table->string('emailAddress');
            $table->string('courseYearDesignation');
            $table->string('purpose');
            $table->string('pastMedHistory')->nullable();
            $table->string('familyHistory')->nullable();
            $table->string('occupationHistory')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_examination_models');
    }
};
