<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmergencyContactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('emergency_contacts', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->text('relationship', 65535)->nullable();
			$table->text('first_name', 65535)->nullable();
			$table->text('last_name', 65535)->nullable();
			$table->boolean('is_active')->default(1);
			$table->boolean('is_primary');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('emergency_contacts');
	}

}
