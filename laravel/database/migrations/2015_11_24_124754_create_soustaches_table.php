<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoustachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soustaches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('soustaches');
            $table->date('date');
            $table->tinyInteger('etat')->default(0);;
            $table->integer('idtache')->unsigned();
            $table->timestamps();
        });

        Schema::table('soustaches', function($table){
            $table->foreign('idtache')->references('id')->on('taches')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('soustaches');
    }
}
