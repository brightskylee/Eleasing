<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCustomerEnvelopesDocumentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_customer_envelopes_documents', function(Blueprint $table)
		{
			$table->foreign('customer_envelope_id', 'fk_customer_envelopes_documents')->references('id')->on('customer_envelopes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('document_id', 'fk_documents_customer_envelopes')->references('id')->on('documents')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_customer_envelopes_documents', function(Blueprint $table)
		{
			$table->dropForeign('fk_customer_envelopes_documents');
			$table->dropForeign('fk_documents_customer_envelopes');
		});
	}

}
