<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('CR_id')
            ->constrained('classrooms')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('Course_id')
            ->constrained('courses')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('student_id')
            ->constrained('students')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('teacher_id')
            ->constrained('teachers')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('school_id')
            ->constrained('schools')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lessones');
    }
}
