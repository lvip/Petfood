<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodAdditivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_additives', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('additives_id')->unsigned();
            $table->integer('food_id')->unsigned();
            $table->integer('value')->unsigned();
            $table->timestamps();
        });
        Schema::table('food_additives', function(Blueprint $table) {
            $table->foreign('food_id')->references('id')->on('foods')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });

        Schema::table('food_additives', function(Blueprint $table) {
            $table->foreign('additives_id')->references('id')->on('additives')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('food_additives');
    }
}
