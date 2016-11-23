<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPhoneNumbersPhoneNumberTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_phone_numbers_phone_number_types', function(Blueprint $table)
		{
			$table->foreign('phone_number_id', 'fk_phone_number_phone_number_type')->references('id')->on('phone_numbers')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('phone_number_type_id', 'fk_phone_number_type_phone_number')->references('id')->on('phone_number_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_phone_numbers_phone_number_types', function(Blueprint $table)
		{
			$table->dropForeign('fk_phone_number_phone_number_type');
			$table->dropForeign('fk_phone_number_type_phone_number');
		});
	}

}
