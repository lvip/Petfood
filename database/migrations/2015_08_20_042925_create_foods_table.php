<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title', 255);
            $table->string('image', 255);
            $table->string('slug', 255)->unique();
            $table->boolean('iscat')->default(false);
            $table->boolean('isdog')->default(false);
            $table->boolean('seen')->default(false);
            $table->boolean('active')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('foods');
    }
}
