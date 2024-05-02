<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('size');
            $table->string('course_id');
            $table->string('location');
            $table->integer('semester')->nullable(); // Add this line to include the semester
            $table->string('category');
            $table->string('year');
            $table->string('cat_name')->nullable();
            $table->string('due_date')->nullable();
            $table->string('unit_code');
            $table->string('unit_name');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('files');
    }
};