<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDigitalComplementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('digital_complements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('opening_chapters');
            $table->integer('opening_chapters_done');
            $table->boolean('opening_chapters_exists');
            $table->integer('animation2d');
            $table->integer('animation2d_done');
            $table->boolean('animation2d_exists');
            $table->integer('animation3d');
            $table->integer('animation3d_done');
            $table->boolean('animation3d_exists');
            $table->integer('formulas');
            $table->integer('formulas_done');
            $table->boolean('formulas_exists');
            $table->integer('photografs');
            $table->integer('photografs_done');
            $table->boolean('photografs_exists');
            $table->integer('ilustrations');
            $table->integer('ilustrations_done');
            $table->boolean('ilustrations_exists');
            $table->integer('modeling3d');
            $table->integer('modeling3d_done');
            $table->boolean('modeling3d_exists');
            $table->integer('development');
            $table->boolean('development_exists');
            $table->integer('tables');
            $table->integer('tables_done');
            $table->boolean('tables_exists');
            $table->integer('digitalmark_id')->unsigned()->default(0);
            $table->foreign('digitalmark_id')->references('id')->on('digital_marks')->onDelete('cascade');
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
        Schema::drop('digital_complements');
    }
}
