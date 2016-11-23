<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocumentInputFieldsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('document_input_fields', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('name', 50);
			$table->string('value', 100)->nullable();
			$table->string('group_name', 50)->nullable();
			$table->string('signing_user_type', 45)->nullable();
			$table->bigInteger('signing_user_id')->nullable();
			$table->boolean('is_signed')->nullable();
			$table->boolean('is_encrypted')->nullable()->default(0);
			$table->string('decryption_key_ciphertext')->nullable();
			$table->string('value_ciphertext')->nullable();
			$table->boolean('is_required')->default(1);
			$table->boolean('is_secure')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('document_input_fields');
	}

}
