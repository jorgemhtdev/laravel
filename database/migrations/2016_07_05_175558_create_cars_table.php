<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations. We create a new table called cars
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->enum('car_brand', ['audi', 'bmw','opel','seat','honda','mercedes']);
            $table->smallInteger('price')->unsigned();
            $table->string('number_plate',10)->unique()->nullable(); // license plate
            $table->enum('color',['red', 'yellow','blue','white','pink','gray']);
            $table->integer('clients_id')->unsigned();
            $table->timestamps(); // With timestamps we create the following fields created_at and updated_at

            $table->index('car_brand'); // license plate

            $table->foreign('clients_id')
                ->references('id')
                ->on('clients')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cars');
    }
}
