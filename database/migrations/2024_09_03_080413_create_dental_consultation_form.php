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
        Schema::create('dental_consultation_form', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('age');
            $table->string('sex');
            $table->string('courseYears');
            $table->string('contactNumber');
            $table->string('caseHistory')->nullable();
            $table->string('chiefComplaint')->nullable();
            $table->string('examinedBy');
            $table->date('date_user');
            $table->string('date_admin')->nullable();
            $table->string('vs_admin')->nullable();
            $table->string('servicesRendered_admin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dental_consultation_form');
    }
};
