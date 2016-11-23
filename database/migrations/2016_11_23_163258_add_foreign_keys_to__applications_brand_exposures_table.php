<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToApplicationsBrandExposuresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_applications_brand_exposures', function(Blueprint $table)
		{
			$table->foreign('application_id', 'fk_application_brand_exposure')->references('id')->on('applications')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('brand_exposure_id', 'fk_brand_exposure_application')->references('id')->on('brand_exposures')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_applications_brand_exposures', function(Blueprint $table)
		{
			$table->dropForeign('fk_application_brand_exposure');
			$table->dropForeign('fk_brand_exposure_application');
		});
	}

}
