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
        Schema::create('medical_examination_form3', function (Blueprint $table) {
            $table->id();
            $table->string('bp');
            $table->string('temp');
            $table->string('hr');
            $table->string('rr');
            $table->string('height');
            $table->string('weight');
            $table->string('hearingNormal');
            $table->string('hearingImpaired');
            $table->string('visionWithglasses');
            $table->string('visionWithglassesR');
            $table->string('visionWithoutglasses');
            $table->string('visionWithoutglassesL');
            $table->string('chestXrayPAview');
            $table->string('chestXrayLordoticView');
            $table->string('chestXrayNormal');
            $table->string('chestXrayFindings')->nullable();
            $table->string('completeBloodCountNormal');
            $table->string('completeBloodCountFindings')->nullable();
            $table->string('routineUrinalysisNormal');
            $table->string('routineUrinalysisFindings')->nullable();
            $table->string('fecalysisStoolExaminationNormal');
            $table->string('fecalysisStoolExaminationFindings')->nullable();
            $table->string('hepatitisBscreeningNormal');
            $table->string('hepatitisBscreeningFindings')->nullable();
            $table->string('drugTestMetaNegative');
            $table->string('drugTestMetaPositive');
            $table->string('drugTestTetraPositive');
            $table->string('drugTestTetraNegative');
            $table->string('signatureOverPrintedName');
            $table->string('attachPic');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_examination_form3');
    }
};
