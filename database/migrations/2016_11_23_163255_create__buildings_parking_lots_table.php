<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBuildingsParkingLotsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_buildings_parking_lots', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->bigInteger('building_id')->nullable();
			$table->bigInteger('parking_lot_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_buildings_parking_lots');
	}

}
