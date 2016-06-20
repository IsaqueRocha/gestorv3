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
            $table->boolean('cover')->default(false);
            $table->integer('chapters');
            $table->integer('opening_chapters');
            $table->boolean('authorcv');
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
