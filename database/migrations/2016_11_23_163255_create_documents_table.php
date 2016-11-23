<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocumentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('documents', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('unique_document_id', 100)->nullable()->unique('unique_document_id_UNIQUE');
			$table->string('document_decryption_key_ciphertext', 128)->nullable();
			$table->boolean('is_active')->default(1);
			$table->boolean('is_manual')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('documents');
	}

}
