<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBrandsBuildingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_brands_buildings', function(Blueprint $table)
		{
			$table->foreign('brand_id', 'fk_brand_building')->references('id')->on('brands')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('building_id', 'fk_building_brand')->references('id')->on('buildings')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_brands_buildings', function(Blueprint $table)
		{
			$table->dropForeign('fk_brand_building');
			$table->dropForeign('fk_building_brand');
		});
	}

}
