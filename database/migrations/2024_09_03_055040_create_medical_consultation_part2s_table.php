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
        Schema::create('medical_consultation_part2s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('fatherName');
            $table->string('fatherDOB');
            $table->string('fatherOccupation');
            $table->string('motherName');
            $table->string('motherDOB');
            $table->string('motherOccupation');
            $table->string('personToBeNotified');
            $table->string('part2CellphoneNumber');
            $table->string('canotBeReachName');
            $table->string('canotBeReachCellphoneNumber');
            $table->string('cannotBeReachRelationToThePatient');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_consultation_part2s');
    }
};
