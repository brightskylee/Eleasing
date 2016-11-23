<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocumentTemplatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('document_templates', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('name', 45);
			$table->integer('total_pages')->nullable();
			$table->boolean('is_current')->default(1);
			$table->timestamp('creation_timestamp')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->boolean('immediate_creation')->nullable()->default(0);
			$table->boolean('optional_document')->nullable()->default(0);
			$table->string('config_name')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('document_templates');
	}

}
