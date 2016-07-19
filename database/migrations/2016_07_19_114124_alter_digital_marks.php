<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterDigitalMarks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('digital_marks', function (Blueprint $table) {
            $table->integer('format_id')->unsigned();
            $table->foreign('format_id')->references('id')->on('format');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('digital_marks', function (Blueprint $table) {
            $table->dropForeign(['format_id']);
        });
    }
}
