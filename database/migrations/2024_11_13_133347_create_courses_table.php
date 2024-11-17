<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_id')->constrained('users')->onDelete('cascade');
            $table->string('subject');
            $table->enum('level', ['elementary', 'highschool', 'college', 'other']);
            $table->string('location')->nullable();
            $table->integer('num_of_students')->default(1);
            $table->enum('gender_preference', ['male', 'female', 'any'])->default('any');
            $table->date('start_date');
            $table->decimal('min_rate', 10, 2)->nullable();
            $table->decimal('max_rate', 10, 2)->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('courses');
    }
}