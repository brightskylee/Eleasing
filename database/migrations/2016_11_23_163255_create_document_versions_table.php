<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocumentVersionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('document_versions', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('version_hash', 128)->nullable();
			$table->boolean('is_current')->nullable();
			$table->string('dir_path')->nullable();
			$table->string('file_name')->nullable();
			$table->boolean('is_encrypted')->nullable();
			$table->string('decryption_key_ciphertext')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('document_versions');
	}

}
