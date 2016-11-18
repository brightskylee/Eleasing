<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateInitialDatabase
 *
 * This Class create the initial database for inquiry
 *
 * We wrapped multiple table creation in this single migration file. However
 * this is not a good practice. Since if there is one table creation failed
 * while some others succeeded. There is no way to rollback since the migration
 * as a whole did not succeed thus no migration record in database for rollback.
 * But the succeeded operations are done already so it will leave the database in an
 * inconsistent state.
 *
 * Thus in the future we need to make sure migration file is 'atomic', which means it cannot
 * be divided further. So that we can have a good version control of the database
 */
class CreateInitialDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        $this->upCustomers();
        $this->upInquiries();
        $this->upInquiryClassifiers();
        $this->upInquiryTypes();
        $this->upInquiryLabels();
        $this->upInquiryEvents();

        $this->upCustomerPreferences();
        $this->upMarketingOutreach();
        $this->upSchools();
        $this->upOrganizations();
        $this->upBrandExposures();

        $this->upEmailAddresses();
        $this->upEmailAddressTypes();
        $this->upPhoneNumbers();
        $this->upPhoneNumberTypes();
        
    }

    private function upCustomers()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('middle_initial', 1)->nullable();
            $table->string('last_name');
            $table->string('gender')->nullable();
            $table->date('birthday')->nullable();
            $table->timestamps();
        });
    }

    private function upInquiries()
    {
        Schema::create('inquiries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
        });
    }

    private function upCustomerPreferences()
    {
        Schema::create('customer_preferences', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('preference_name');
        });
    }

    private function upMarketingOutreach()
    {
        Schema::create('marketing_outreaches', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
        });
    }

    private function upSchools()
    {
        Schema::create('schools', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
        });
    }

    private function upOrganizations()
    {
        Schema::create('organizations', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
        });
    }

    private function upBrandExposures()
    {
        Schema::create('brand_exposures', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
        });
    }

    private function upInquiryClassifiers()
    {
        Schema::create('inquiry_classifiers', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
        });
    }

    private function upInquiryTypes()
    {
        Schema::create('inquiry_types', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
        });
    }

    private function upInquiryLabels()
    {
        Schema::create('inquiry_labels', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
        });
    }


    private function upInquiryEvents()
    {
        Schema::create('inquiry_events', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->text("description");
            $table->timestamps();
        });
    }

    private function upEmailAddresses()
    {
        Schema::create('email_addresses', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string("email_address");
            $table->boolean("is_active")->default(1);
            $table->boolean("is_primary")->default(0);
        });
    }

    private function upEmailAddressTypes()
    {
        Schema::create('email_address_types', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string("type");
        });
    }

    private function upPhoneNumbers()
    {
        Schema::create('phone_numbers', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string("phone_number");
            $table->boolean("is_active")->default(1);
            $table->boolean("is_primary")->default(0);
        });
    }


    private function upPhoneNumberTypes()
    {
        Schema::create('phone_number_types', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string("type");
            $table->text("description");
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inquiry_events');
        Schema::dropIfExists('inquiry_types');
        Schema::dropIfExists('inquiry_labels');
        Schema::dropIfExists('inquiry_classifiers');
        Schema::dropIfExists('brand_exposures');
        Schema::dropIfExists('organizations');
        Schema::dropIfExists('schools');
        Schema::dropIfExists('marketing_outreaches');
        Schema::dropIfExists('customer_preferences');
        Schema::dropIfExists('inquiries');
        Schema::dropIfExists('customers');
        Schema::dropIfExists('email_addresses');
        Schema::dropIfExists('email_address_types');
        Schema::dropIfExists('phone_numbers');
        Schema::dropIfExists('phone_number_types');
    }
}


