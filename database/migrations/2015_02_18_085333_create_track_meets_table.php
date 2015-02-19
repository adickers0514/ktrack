<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrackMeetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('meets', function(Blueprint $table)
		{
			$table->string('title');
            $table->date('date');
            $table->string('start_time');
            $table->integer('location');
            $table->text('notes')->nullable();

            $table->increments('id');
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
		Schema::drop('meets');
	}

}
