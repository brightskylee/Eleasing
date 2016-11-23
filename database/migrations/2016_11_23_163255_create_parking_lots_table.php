<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParkingLotsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('parking_lots', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->string('name', 100);
			$table->decimal('price', 15, 10);
			$table->string('short_name', 100)->nullable();
			$table->integer('total_resident_spots')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('parking_lots');
	}

}
