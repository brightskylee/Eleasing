<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBackupsUpdateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('backups_update', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->integer('editing_user')->nullable();
			$table->text('object_name', 65535);
			$table->bigInteger('obj_id');
			$table->text('json_field_data', 65535);
			$table->text('json_relationships', 65535)->nullable();
			$table->timestamp('timestamp')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('backups_update');
	}

}
