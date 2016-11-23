<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBrandExposuresInquiriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_brand_exposures_inquiries', function(Blueprint $table)
		{
			$table->foreign('brand_exposure_id', 'fk_brand_exposure_id')->references('id')->on('brand_exposures')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('inquiry_id', 'fk_inquiry_id')->references('id')->on('inquiries')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_brand_exposures_inquiries', function(Blueprint $table)
		{
			$table->dropForeign('fk_brand_exposure_id');
			$table->dropForeign('fk_inquiry_id');
		});
	}

}
