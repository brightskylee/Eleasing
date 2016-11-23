<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParkingLotsParkingSpotsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_parking_lots_parking_spots', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->bigInteger('parking_lot_id')->nullable();
			$table->bigInteger('parking_spot_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_parking_lots_parking_spots');
	}

}
