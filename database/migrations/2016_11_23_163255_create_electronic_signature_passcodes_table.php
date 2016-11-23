<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateElectronicSignaturePasscodesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('electronic_signature_passcodes', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('passcode', 32)->nullable()->unique('passcode');
			$table->dateTime('timestamp')->nullable();
			$table->string('contact_email_address', 100)->nullable();
			$table->boolean('is_manual_key')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('electronic_signature_passcodes');
	}

}
