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
        Schema::create('medical_examination_form4', function (Blueprint $table) {
            $table->id();
            $table->string('classA')->nullable();
            $table->string('classB')->nullable();
            $table->string('classC')->nullable();
            $table->string('skinDesease')->nullable();
            $table->string('dentalDefects')->nullable();
            $table->string('anemia')->nullable();
            $table->string('poorVision')->nullable();
            $table->string('urinaryTractInfection')->nullable();
            $table->string('intestinalParasitism')->nullable();
            $table->string('mildHypertension')->nullable();
            $table->string('diabetes')->nullable();
            $table->string('remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_examination_form4');
    }
};
