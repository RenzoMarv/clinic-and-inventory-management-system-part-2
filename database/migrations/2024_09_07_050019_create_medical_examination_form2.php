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
        Schema::create('medical_examination_form2', function (Blueprint $table) {
            $table->id();
            $table->string('bmiNormal');
            $table->string('bmiFindings')->nullable();
            $table->string('skinNormal');
            $table->string('skinFindings')->nullable();
            $table->string('headNormal');
            $table->string('headFindingsl')->nullable();
            $table->string('eyesNormal');
            $table->string('eyesFindings')->nullable();
            $table->string('earsNomral');
            $table->string('earsFindings')->nullable();
            $table->string('mouthNormal');
            $table->string('mouthFindings')->nullable();
            $table->string('neckNormal');
            $table->string('neckFindings')->nullable();
            $table->string('chestNormal');
            $table->string('chestFindings')->nullable();
            $table->string('abdomenNormal');
            $table->string('abdomenFindings')->nullable();
            $table->string('rectalNormal');
            $table->string('rectalFindings')->nullable();
            $table->string('muscoNormal');
            $table->string('muscoFindings')->nullable();
            $table->string('extremitiesNormal');
            $table->string('extremitiesFindings')->nullable();
            $table->string('others');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_examination_form2');
    }
};
