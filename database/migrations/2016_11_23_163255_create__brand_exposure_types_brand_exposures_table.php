<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBrandExposureTypesBrandExposuresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_brand_exposure_types_brand_exposures', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('brand_exposure_id')->unsigned()->index('fk_brand_exposure_id_idx');
			$table->bigInteger('brand_exposure_type_id')->unsigned()->index('fk_brand_exposure_type_id_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_brand_exposure_types_brand_exposures');
	}

}
