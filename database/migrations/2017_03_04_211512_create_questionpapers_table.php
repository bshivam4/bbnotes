<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionpapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionpapers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->integer('college_id');
            $table->string('branch');
            $table->integer('semester');
            $table->string('subject');
            $table->string('code');
            $table->string('exam');
            $table->string('session');
            $table->string('file');
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
        Schema::dropIfExists('questionpapers');
    }
}
