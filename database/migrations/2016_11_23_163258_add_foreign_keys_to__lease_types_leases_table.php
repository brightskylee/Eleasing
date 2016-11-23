<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLeaseTypesLeasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_lease_types_leases', function(Blueprint $table)
		{
			$table->foreign('lease_id', 'fk_lease_lease_type')->references('id')->on('leases')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('lease_type_id', 'fk_lease_type_lease')->references('id')->on('lease_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_lease_types_leases', function(Blueprint $table)
		{
			$table->dropForeign('fk_lease_lease_type');
			$table->dropForeign('fk_lease_type_lease');
		});
	}

}
