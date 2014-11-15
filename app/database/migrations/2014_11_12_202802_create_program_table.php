<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('program', function ($table) {
            $table->increments('id');
            $table->string('title');
            $table->string('date');
            $table->string('time_from');
            $table->string('time_to');
            $table->string('description');
            $table->string('location');
            $table->string('speaker')->nullable();
            $table->boolean('confirmed')->default(true);
            $table->Integer('type');
            $table->Integer('pid')->nullable();
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
        Schema::drop('program');
	}

}
