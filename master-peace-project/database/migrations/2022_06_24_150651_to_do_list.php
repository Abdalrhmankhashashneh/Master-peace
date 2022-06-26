<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ToDoList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('to_do_list', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description');
            $table->foreignId('student_id')
            ->constrained('Student')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('teacher_id')
            ->constrained('Teacher')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->boolean('status');
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
        Schema::dropIfExists('to_do_list');

    }
}
