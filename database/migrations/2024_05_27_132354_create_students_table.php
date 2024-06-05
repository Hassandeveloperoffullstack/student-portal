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
            $table->string('email')->unique();
            $table->string('phone');
            $table->foreignId('department_id')->references('id')->on('departments')->cascadeOnDelete();
            $table->foreignId('class_id')->references('id')->on('grades')->cascadeOnDelete();
            $table->foreignId('session_id')->references('id')->on('sessions')->cascadeOnDelete();
            $table->string('cnic');
            $table->string('city');
            $table->string('gender');
            $table->string('address');
            $table->integer('zipcode');
            $table->string('f_name');
            $table->string('f_phone');
            $table->string('f_cnic');
            $table->string('password');
            $table->string('image');
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
