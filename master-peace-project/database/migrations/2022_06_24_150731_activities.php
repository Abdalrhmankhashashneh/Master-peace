<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Activities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description');
            $table->date('date');
            $table->foreignId('student_id')
            ->constrained('Student')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('manager_id')
            ->constrained('Manager')
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
        Schema::dropIfExists('activities');
    }
}
