<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_marks', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('metting')->default(false);
            $table->string('briefing');
            $table->integer('script_id');
            $table->boolean('decoupage');
            $table->boolean('storyboard');
            $table->boolean('audio_capture');
            $table->boolean('audio_capture_exists');
            $table->integer('recording');
            $table->integer('recording_done');
            $table->integer('video_edition');
            $table->integer('video_edition_done');
            $table->integer('sound_edition');
            $table->boolean('animatic');
            $table->boolean('subtitle');
            $table->boolean('subtitle_exists');
            $table->boolean('credits');
            $table->boolean('render');
            $table->boolean('coord_revision');
            $table->boolean('teacher_approval');
            $table->boolean('upload');
            $table->boolean('upload_exists');
            $table->boolean('dvd');
            $table->boolean('dvd_exists');
            $table->date('release');
            $table->date('release_exists');
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
        Schema::drop('video_marks');
    }
}
