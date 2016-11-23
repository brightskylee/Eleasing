<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFurniturePricingUnitStylesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_furniture_pricing_unit_styles', function(Blueprint $table)
		{
			$table->foreign('furniture_pricing_id', 'fk_furniture_pricing_unit_style')->references('id')->on('furniture_pricing')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('unit_style_id', 'fk_unit_style_furniture_pricing')->references('id')->on('unit_styles')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_furniture_pricing_unit_styles', function(Blueprint $table)
		{
			$table->dropForeign('fk_furniture_pricing_unit_style');
			$table->dropForeign('fk_unit_style_furniture_pricing');
		});
	}

}
