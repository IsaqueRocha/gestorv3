<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('format', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->enum('type', ['digital', 'impress']);
            $table->timestamps();
        });

        Schema::table('digital_complements', function (Blueprint $table){
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
        Schema::table('digital_complements', function (Blueprint $table){
            $table->dropForeign('digital_complements_format_id_foreign');
        });
        Schema::drop('format');
    }
}
