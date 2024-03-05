<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class File extends Model
{
    use HasFactory;
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('size');
            $table->string('location');
            $table->string('course_id');
            $table->string('user_id');
            $table->integer('semester')->nullable(); // Add this line to include the semester
            $table->string('category');
            $table->string('year');
            $table->string('unit_code');
            $table->string('unit_name');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
    }
}