<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFeesLeasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_fees_leases', function(Blueprint $table)
		{
			$table->foreign('fee_id', 'fk_fee_lease')->references('id')->on('fees')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('lease_id', 'fk_lease_fee')->references('id')->on('leases')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_fees_leases', function(Blueprint $table)
		{
			$table->dropForeign('fk_fee_lease');
			$table->dropForeign('fk_lease_fee');
		});
	}

}
