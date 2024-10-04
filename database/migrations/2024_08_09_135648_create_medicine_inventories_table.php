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
        Schema::create('medicine_inventories', function (Blueprint $table) {
            $table->id();
            $table->string('medicineName');
            $table->string('qty');
            $table->date('expirationDate');
            $table->string('description');
            $table->string('medicineForm');
            $table->string('stockStatus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicine_inventories');
    }
};
