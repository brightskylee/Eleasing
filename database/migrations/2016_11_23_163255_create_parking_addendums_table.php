<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParkingAddendumsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('parking_addendums', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->string('passcode', 16)->nullable();
			$table->string('tenant_first_name', 40);
			$table->string('tenant_last_name', 40);
			$table->string('tenant_signature', 75)->nullable();
			$table->string('email_address', 100)->nullable();
			$table->string('birthday', 25)->nullable();
			$table->string('agent_signature', 75)->nullable();
			$table->string('parking_lot', 50)->nullable();
			$table->decimal('monthly_parking', 10, 5);
			$table->decimal('annual_parking', 15, 5);
			$table->string('company', 30);
			$table->string('start_date', 40);
			$table->string('end_date', 40);
			$table->string('unsigned_id', 20)->nullable();
			$table->string('signed_id', 20)->nullable();
			$table->string('completed_id', 20)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('parking_addendums');
	}

}
