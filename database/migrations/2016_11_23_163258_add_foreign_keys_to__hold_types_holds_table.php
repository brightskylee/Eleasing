<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToHoldTypesHoldsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_hold_types_holds', function(Blueprint $table)
		{
			$table->foreign('hold_id', 'fk_hold_hold_type')->references('id')->on('holds')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('hold_type_id', 'fk_hold_type_hold')->references('id')->on('hold_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_hold_types_holds', function(Blueprint $table)
		{
			$table->dropForeign('fk_hold_hold_type');
			$table->dropForeign('fk_hold_type_hold');
		});
	}

}
