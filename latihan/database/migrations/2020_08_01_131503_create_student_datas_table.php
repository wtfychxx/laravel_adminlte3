<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_datas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_first', 30);
            $table->string('name_middle', 30);
            $table->string('name_last', 30);
            $table->string('name_official', 100);
            $table->string('name_nick', 30);
            $table->date('birth_date');
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
        Schema::dropIfExists('student_datas');
    }
}
