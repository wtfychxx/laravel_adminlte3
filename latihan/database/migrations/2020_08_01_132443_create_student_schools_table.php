<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_schools', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('data__id')->unique();
            $table->string('number', 30);
            $table->date('join_date');
            $table->bigInteger('student_status__id')->nullable($value = false);
            $table->bigInteger('major__id')->nullable($value = false);
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
        Schema::dropIfExists('student_schools');
    }
}
