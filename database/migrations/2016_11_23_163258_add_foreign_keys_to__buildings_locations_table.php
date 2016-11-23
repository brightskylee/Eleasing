<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBuildingsLocationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_buildings_locations', function(Blueprint $table)
		{
			$table->foreign('building_id', 'fk_building_location')->references('id')->on('buildings')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('location_id', 'fk_location_building')->references('id')->on('locations')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_buildings_locations', function(Blueprint $table)
		{
			$table->dropForeign('fk_building_location');
			$table->dropForeign('fk_location_building');
		});
	}

}
