<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBuildingsCompaniesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_buildings_companies', function(Blueprint $table)
		{
			$table->foreign('building_id', 'fk_building_company')->references('id')->on('buildings')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('company_id', 'fk_company_building')->references('id')->on('companies')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_buildings_companies', function(Blueprint $table)
		{
			$table->dropForeign('fk_building_company');
			$table->dropForeign('fk_company_building');
		});
	}

}
