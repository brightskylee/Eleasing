<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBrandExposureTypesBrandExposuresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_brand_exposure_types_brand_exposures', function(Blueprint $table)
		{
			$table->foreign('brand_exposure_id', 'fk_brand_exposure_brand_exposure_type')->references('id')->on('brand_exposures')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('brand_exposure_type_id', 'fk_brand_exposure_type_brand_exposure')->references('id')->on('brand_exposure_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_brand_exposure_types_brand_exposures', function(Blueprint $table)
		{
			$table->dropForeign('fk_brand_exposure_brand_exposure_type');
			$table->dropForeign('fk_brand_exposure_type_brand_exposure');
		});
	}

}
