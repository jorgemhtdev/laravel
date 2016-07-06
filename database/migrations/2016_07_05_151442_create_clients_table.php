<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations. We create a new table called clients
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name',25);
            $table->string('identity_card',20)->unique();
            $table->smallInteger('age')->nullable()->unsigned();
            $table->smallInteger('phone')->nullable()->unsigned();
            $table->string('address',50)->nullable();
            $table->timestamps();  // With timestamps we create the following fields created_at and updated_at

            $table->index(['identity_card', 'name']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clients');
    }
}
