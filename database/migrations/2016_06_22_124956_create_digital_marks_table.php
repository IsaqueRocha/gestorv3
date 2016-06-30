<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDigitalMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('digital_marks', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('metting')->default(false);
            $table->string('briefing');
            $table->integer('format_id');
            $table->integer('chapters');
            $table->integer('charpters_done');
            $table->boolean('cover')->default(false);
            $table->boolean('authorcv')->default(false);
            $table->integer('cataloguing_id');
            $table->integer('creditsapproval_id');
            $table->integer('revision_id');
            $table->integer('isbnrequest_id');
            $table->string('isbn');
            $table->integer('coord_revision');
            $table->boolean('upload')->default(false);
            $table->integer('project_id')->unsigned()->dafault(0);
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
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
        Schema::drop('digital_marks');
    }
}
