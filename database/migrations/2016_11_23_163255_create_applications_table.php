<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApplicationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('applications', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->timestamp('creation_datetime')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->bigInteger('creating_user_id')->nullable();
			$table->boolean('wants_utilities')->nullable();
			$table->boolean('wants_furniture')->nullable();
			$table->text('employer', 65535)->nullable();
			$table->text('employer_supervisor', 65535)->nullable();
			$table->string('supervisor_phone', 20)->nullable();
			$table->text('landlord', 65535)->nullable();
			$table->string('landlord_phone', 20)->nullable();
			$table->boolean('wants_pet')->nullable();
			$table->text('year_in_school', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('applications');
	}

}
