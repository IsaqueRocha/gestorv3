<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('chapters');
            $table->integer('charpters_done');
            $table->integer('opening_chapters');
            $table->integer('opening_chapters_done');
            $table->boolean('opening_chapters_exists');
            $table->integer('animation2d');
            $table->integer('animation2d_done');
            $table->boolean('animation2d_exists');
            $table->integer('animation3d');
            $table->integer('animation3d_done');
            $table->boolen('animation3d_exists');
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
        Schema::drop('complements');
    }
}
