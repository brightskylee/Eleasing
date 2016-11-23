<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFurniturePricingUnitStylesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_furniture_pricing_unit_styles', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('furniture_pricing_id')->unsigned()->nullable()->index('fk_furniture_pricing_id_idx');
			$table->bigInteger('unit_style_id')->unsigned()->nullable()->index('fk_unit_styles_id_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_furniture_pricing_unit_styles');
	}

}
