<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Assignment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignment', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description');
            $table->boolean('status');
            $table->foreignId('student_id')
            ->constrained('Student')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('teacher_id')
            ->constrained('Teacher')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('Course_id')
            ->constrained('courses')
            ->onUpdate('cascade')
            ->onDelete('cascade');
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
        Schema::dropIfExists('assignment');

    }
}
