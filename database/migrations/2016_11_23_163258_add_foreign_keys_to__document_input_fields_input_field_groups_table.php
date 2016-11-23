<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDocumentInputFieldsInputFieldGroupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_document_input_fields_input_field_groups', function(Blueprint $table)
		{
			$table->foreign('document_input_field_id', 'fk_document_input_field_input_field_group')->references('id')->on('document_input_fields')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('input_field_group_id', 'fk_input_field_group_document_input_field')->references('id')->on('input_field_groups')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_document_input_fields_input_field_groups', function(Blueprint $table)
		{
			$table->dropForeign('fk_document_input_field_input_field_group');
			$table->dropForeign('fk_input_field_group_document_input_field');
		});
	}

}
