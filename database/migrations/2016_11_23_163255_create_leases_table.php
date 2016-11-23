<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLeasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('leases', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('unique_lease_id', 100)->nullable()->unique('unique_lease_id_UNIQUE');
			$table->string('reference_number')->nullable();
			$table->bigInteger('terminating_user_id')->nullable();
			$table->text('early_termination_reason', 65535)->nullable();
			$table->dateTime('early_termination_datetime')->nullable();
			$table->string('document_decryption_key_ciphertext', 64)->nullable();
			$table->boolean('is_active')->default(1);
			$table->boolean('is_terminated')->default(0);
			$table->boolean('is_manual')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('leases');
	}

}
