<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUnitStylesUnitsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_unit_styles_units', function(Blueprint $table)
		{
			$table->foreign('unit_style_id', 'fk_unit_style_unit')->references('id')->on('unit_styles')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('unit_id', 'fk_unit_unit_style')->references('id')->on('units')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_unit_styles_units', function(Blueprint $table)
		{
			$table->dropForeign('fk_unit_style_unit');
			$table->dropForeign('fk_unit_unit_style');
		});
	}

}
