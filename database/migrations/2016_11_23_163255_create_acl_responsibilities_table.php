<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAclResponsibilitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('acl_responsibilities', function(Blueprint $table)
		{
			$table->bigInteger('id')->unsigned()->primary();
			$table->string('responsibility', 50)->unique('UniqueResponsibility');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('acl_responsibilities');
	}

}
