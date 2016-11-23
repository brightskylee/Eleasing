<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBuildingsUnitsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_buildings_units', function(Blueprint $table)
		{
			$table->foreign('building_id', 'fk_building_unit')->references('id')->on('buildings')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('unit_id', 'fk_unit_building')->references('id')->on('units')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_buildings_units', function(Blueprint $table)
		{
			$table->dropForeign('fk_building_unit');
			$table->dropForeign('fk_unit_building');
		});
	}

}
