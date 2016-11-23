<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBedroomsLeasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_bedrooms_leases', function(Blueprint $table)
		{
			$table->foreign('bedroom_id', 'fk_bedroom_lease')->references('id')->on('bedrooms')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('lease_id', 'fk_lease_bedroom')->references('id')->on('leases')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_bedrooms_leases', function(Blueprint $table)
		{
			$table->dropForeign('fk_bedroom_lease');
			$table->dropForeign('fk_lease_bedroom');
		});
	}

}
