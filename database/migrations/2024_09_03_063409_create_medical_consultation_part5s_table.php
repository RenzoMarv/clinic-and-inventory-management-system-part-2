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
        Schema::create('medical_consultation_part5s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('blindOrVisuallyImpaired')->nullable();
            $table->string('autism')->nullable();
            $table->string('orthopedicallyChallenged')->nullable();
            $table->string('chronicIllness')->nullable();
            $table->string('part5CourseDesination')->nullable();
            $table->string('deafOrMute')->nullable();
            $table->string('congenitalDefects')->nullable();
            $table->string('communicationDisorder')->nullable();
            $table->longText('a')->nullable();
            $table->string('bYes')->nullable();
            $table->string('bNo')->nullable();
            $table->string('bDateOfOperation')->nullable();
            $table->string('bTypeOfOperation')->nullable();
            $table->string('bHospital')->nullable();
            $table->string('cYes')->nullable();
            $table->string('cNo')->nullable();
            $table->string('cHospital')->nullable();
            $table->string('cAttendingPhysician')->nullable();
            $table->string('cDiagnosis')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_consultation_part5s');
    }
};
