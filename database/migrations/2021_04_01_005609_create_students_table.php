<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('student_exam_number');
            $table->integer('phone');
            $table->integer('age');
            $table->char('first_name');
            $table->char('last_name');
            $table->char('majors');
            $table->char('class');
            $table->char('hobby');
            $table->char('place_of_birth');
            $table->string('email')->unique();
            $table->string('address');
            $table->boolean('gender');
            $table->date('date_of_birth');
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
        Schema::dropIfExists('students');
    }
}
