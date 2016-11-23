<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLeasesUnitsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_leases_units', function(Blueprint $table)
		{
			$table->foreign('lease_id', 'fk_lease_unit')->references('id')->on('leases')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('unit_id', 'fk_unit_lease')->references('id')->on('units')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_leases_units', function(Blueprint $table)
		{
			$table->dropForeign('fk_lease_unit');
			$table->dropForeign('fk_unit_lease');
		});
	}

}
