<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBrandExposuresInquiriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_brand_exposures_inquiries', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('brand_exposure_id')->unsigned()->index('fk_brand_exposure_id_idx');
			$table->bigInteger('inquiry_id')->unsigned()->index('fk_inquiry_id_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_brand_exposures_inquiries');
	}

}
