<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLeasesSigningQueuesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_leases_signing_queues', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('lease_id')->unsigned()->nullable()->index('fk_lease_id_idx');
			$table->bigInteger('signing_queue_id')->unsigned()->nullable()->index('fk_signing_queue_id_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_leases_signing_queues');
	}

}
