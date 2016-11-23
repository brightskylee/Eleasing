<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLeasesSigningQueuesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_leases_signing_queues', function(Blueprint $table)
		{
			$table->foreign('lease_id', 'fk_lease_signing_queue')->references('id')->on('leases')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('signing_queue_id', 'fk_signing_queue_lease')->references('id')->on('signing_queues')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_leases_signing_queues', function(Blueprint $table)
		{
			$table->dropForeign('fk_lease_signing_queue');
			$table->dropForeign('fk_signing_queue_lease');
		});
	}

}
