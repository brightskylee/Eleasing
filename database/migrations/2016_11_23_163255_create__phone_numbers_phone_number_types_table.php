<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePhoneNumbersPhoneNumberTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_phone_numbers_phone_number_types', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('phone_number_id')->unsigned()->nullable()->index('fk_phone_number_id_idx');
			$table->bigInteger('phone_number_type_id')->unsigned()->nullable()->index('fk_phone_number_type_id_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_phone_numbers_phone_number_types');
	}

}
