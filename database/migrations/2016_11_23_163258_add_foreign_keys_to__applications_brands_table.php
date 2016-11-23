<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToApplicationsBrandsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_applications_brands', function(Blueprint $table)
		{
			$table->foreign('application_id', 'fk_application_brand')->references('id')->on('applications')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('brand_id', 'fk_brand_application')->references('id')->on('brands')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_applications_brands', function(Blueprint $table)
		{
			$table->dropForeign('fk_application_brand');
			$table->dropForeign('fk_brand_application');
		});
	}

}
