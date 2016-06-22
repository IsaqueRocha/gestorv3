<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_marks', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('metting')->default(false);
            $table->string('briefing');
            $table->boolean('interact_flux');
            $table->integer('layouts');
            $table->integer('layouts_done');
            $table->boolean('test');
            $table->boolean('teacher_approval');
            $table->boolean('upload');

            $table->integer('complements_id');
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
        Schema::drop('web_marks');
    }
}
