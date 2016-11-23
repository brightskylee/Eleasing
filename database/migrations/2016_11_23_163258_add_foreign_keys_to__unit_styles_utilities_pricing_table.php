<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUnitStylesUtilitiesPricingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_unit_styles_utilities_pricing', function(Blueprint $table)
		{
			$table->foreign('unit_style_id', 'fk_unit_style_utility_pricing')->references('id')->on('unit_styles')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('utilities_pricing_id', 'fk_utility_pricing_unit_style')->references('id')->on('utilities_pricing')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_unit_styles_utilities_pricing', function(Blueprint $table)
		{
			$table->dropForeign('fk_unit_style_utility_pricing');
			$table->dropForeign('fk_utility_pricing_unit_style');
		});
	}

}
