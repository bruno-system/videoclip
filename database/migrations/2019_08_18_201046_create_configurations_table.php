<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConfigurationsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configurations', function (Blueprint $table) {
            $table->increments('id');
            $table->text('direccion');
            $table->string('email');
            $table->string('phone');
            $table->text('horarios');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('social');
            $table->string('mensaje');
            $table->string('popup');
            $table->integer('paginateA');
            $table->integer('paginateB');
            $table->string('style');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('configurations');
    }
}
