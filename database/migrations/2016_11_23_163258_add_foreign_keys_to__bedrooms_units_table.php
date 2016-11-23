<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBedroomsUnitsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_bedrooms_units', function(Blueprint $table)
		{
			$table->foreign('bedroom_id', 'fk_bedroom_unit')->references('id')->on('bedrooms')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('unit_id', 'fk_unit_bedroom')->references('id')->on('units')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_bedrooms_units', function(Blueprint $table)
		{
			$table->dropForeign('fk_bedroom_unit');
			$table->dropForeign('fk_unit_bedroom');
		});
	}

}
