<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoodleMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moodle_marks', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('metting')->default(false);
            $table->string('briefing');
            $table->boolean('css');
            $table->boolean('css_exists');
            $table->boolean('header');
            $table->boolean('header_exists');
            $table->integer('presentation');
            $table->boolean('send_files');
            $table->boolean('online_check');
            $table->boolean('folder_struct');


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
        Schema::drop('moodle_marks');
    }
}
