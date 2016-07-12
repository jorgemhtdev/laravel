<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarMechanicalPivotTable extends Migration
{
    /**
     * Run the migrations. We create a new table called car_mechanical
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_mechanical', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('car_id')->unsigned()->index()->unsigned();
            $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade');
            $table->integer('mechanical_id')->unsigned()->index()->unsigned();
            $table->foreign('mechanical_id')->references('id')->on('mechanical')->onDelete('cascade');
            $table->smallInteger('hours');
            $table->date('date');
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
        Schema::drop('car_mechanical');
    }
}
