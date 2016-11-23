<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUnitStylesUtilitiesPricingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_unit_styles_utilities_pricing', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('unit_style_id')->unsigned()->nullable()->index('fk_unit_styles_id_idx');
			$table->bigInteger('utilities_pricing_id')->unsigned()->nullable()->index('fk_utilities_pricing_id_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_unit_styles_utilities_pricing');
	}

}
