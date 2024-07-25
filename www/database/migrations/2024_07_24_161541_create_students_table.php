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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('birth_date');
            $table->enum('address_type', ['billing', 'residential', 'mail']);
            $table->string('address_street');
            $table->string('address_cep');
            $table->string('address_number');
            $table->string('address_complement')->nullable();
            $table->enum('grade', [1, 2, 3, 4]);
            $table->enum('segment', [1, 2, 3, 4]);
            $table->string('father_name')->nullable();
            $table->string('mother_name');
            $table->foreignId('class_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
