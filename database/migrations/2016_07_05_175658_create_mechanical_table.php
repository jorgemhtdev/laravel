<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMechanicalTable extends Migration
{
    /**
     * Run the migrations. We create a new table called mechanical
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mechanical', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->smallInteger('age')->nullable();
            $table->smallInteger('salary')->nullable();
            $table->timestamps(); // With timestamps we create the following fields created_at and updated_at
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mechanical');
    }
}
