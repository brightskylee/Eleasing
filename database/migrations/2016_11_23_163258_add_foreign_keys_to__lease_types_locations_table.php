<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLeaseTypesLocationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_lease_types_locations', function(Blueprint $table)
		{
			$table->foreign('lease_type_id', 'fk_lease_type_location')->references('id')->on('lease_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('location_id', 'fk_location_lease_type')->references('id')->on('locations')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_lease_types_locations', function(Blueprint $table)
		{
			$table->dropForeign('fk_lease_type_location');
			$table->dropForeign('fk_location_lease_type');
		});
	}

}
