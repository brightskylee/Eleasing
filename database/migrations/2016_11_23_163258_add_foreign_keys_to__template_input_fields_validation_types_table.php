<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTemplateInputFieldsValidationTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_template_input_fields_validation_types', function(Blueprint $table)
		{
			$table->foreign('template_input_field_id', 'fk_template_input_field_validation_type')->references('id')->on('template_input_fields')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('validation_type_id', 'fk_validation_type_template_input_field')->references('id')->on('validation_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_template_input_fields_validation_types', function(Blueprint $table)
		{
			$table->dropForeign('fk_template_input_field_validation_type');
			$table->dropForeign('fk_validation_type_template_input_field');
		});
	}

}
