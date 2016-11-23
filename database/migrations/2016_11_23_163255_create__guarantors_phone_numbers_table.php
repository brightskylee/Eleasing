<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGuarantorsPhoneNumbersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_guarantors_phone_numbers', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('guarantor_id')->unsigned()->nullable()->index('fk_guarantor_id_idx');
			$table->bigInteger('phone_number_id')->unsigned()->nullable()->index('fk_phone_number_id_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_guarantors_phone_numbers');
	}

}
