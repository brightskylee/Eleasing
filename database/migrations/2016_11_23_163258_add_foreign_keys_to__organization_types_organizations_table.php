<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOrganizationTypesOrganizationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_organization_types_organizations', function(Blueprint $table)
		{
			$table->foreign('organization_id', 'fk_organization_organization_type')->references('id')->on('organizations')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('organization_type_id', 'fk_organization_type_organization')->references('id')->on('organization_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_organization_types_organizations', function(Blueprint $table)
		{
			$table->dropForeign('fk_organization_organization_type');
			$table->dropForeign('fk_organization_type_organization');
		});
	}

}
