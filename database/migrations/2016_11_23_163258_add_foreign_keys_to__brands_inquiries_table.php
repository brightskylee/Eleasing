<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBrandsInquiriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_brands_inquiries', function(Blueprint $table)
		{
			$table->foreign('brand_id', 'fk_brand_inquiry')->references('id')->on('brands')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('inquiry_id', 'fk_inquiry_brand')->references('id')->on('inquiries')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_brands_inquiries', function(Blueprint $table)
		{
			$table->dropForeign('fk_brand_inquiry');
			$table->dropForeign('fk_inquiry_brand');
		});
	}

}
