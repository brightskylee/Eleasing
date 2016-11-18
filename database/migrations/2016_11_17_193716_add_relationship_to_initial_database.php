<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/***
 * Class AddRelationshipToInitialDatabase
 *
 * This Class create the relationships(foreign keys) for the initial database
 *
 * We wrapped multiple operations in this single migration file. However
 * this is not a good practice. Since if there is one operation failed
 * while some others succeeded. There is no way to rollback since the migration
 * as a whole did not succeed thus no migration record in database for rollback.
 * But the succeeded operations are done already so it will leave the database in an
 * inconsistent state.
 *
 * Thus in the future we need to make sure migration file is 'atomic', which means it cannot
 * be divided further. So that we can have a good version control of the database
 */
class AddRelationshipToInitialDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->upBrandExposureCustomerPivotTable();
        $this->upCustomerMarketingOutreachPivotTable();
        $this->upCustomerOrganizationPivotTable();
        $this->upCustomerPreferenceCustomerPivotTable();
        $this->upCustomerSchoolPivotTable();
        $this->upInquiryInquiryClassifierPivotTable();
        $this->upInquiryInquiryLabelPivotTable();

        $this->addCustomerIdToInquiry();
        $this->addInquiryTypeIdToInquiry();
        $this->addInquiryIdToInquiryEvent();

        $this->upEmailAddressCustomerPivotTable();
        $this->addEmailTypeIdToEmail();
        $this->upPhoneNumberCustomerPivotTable();
        $this->addPhoneTypeIdToPhone();




    }

    private function upCustomerPreferenceCustomerPivotTable()
    {
        Schema::create('_customer_customer_preference', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->bigInteger('customer_preference_id',false, true);
            $table->bigInteger('customer_id', false, true);

            $table->foreign('customer_preference_id')->references('id')->on('customer_preferences')->onDelete('cascade');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
        });
    }

    private function upCustomerMarketingOutreachPivotTable()
    {
        Schema::create('_customer_marketing_outreach', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->bigInteger('marketing_outreach_id',false, true);
            $table->bigInteger('customer_id', false, true);

            $table->foreign('marketing_outreach_id')->references('id')->on('marketing_outreaches')->onDelete('cascade');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
        });
    }

    private function upCustomerSchoolPivotTable()
    {
        Schema::create('_customer_school', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->bigInteger('school_id',false, true);
            $table->bigInteger('customer_id', false, true);

            $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
        });
    }

    private function upCustomerOrganizationPivotTable()
    {
        Schema::create('_customer_organization', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->bigInteger('organization_id',false, true);
            $table->bigInteger('customer_id', false, true);

            $table->foreign('organization_id')->references('id')->on('organizations')->onDelete('cascade');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
        });
    }

    private function upBrandExposureCustomerPivotTable()
    {
        Schema::create('_brand_exposure_customer', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->bigInteger('brand_exposure_id',false, true);
            $table->bigInteger('customer_id', false, true);

            $table->foreign('brand_exposure_id')->references('id')->on('brand_exposures')->onDelete('cascade');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
        });
    }

    private function addCustomerIdToInquiry()
    {
        Schema::table('inquiries', function(Blueprint $table){
            $table->bigInteger('customer_id', false, true);
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
        });
    }

    private function upInquiryInquiryClassifierPivotTable()
    {
        Schema::create('_inquiry_inquiry_classifier', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->bigInteger('inquiry_classifier_id',false, true);
            $table->bigInteger('inquiry_id', false, true);

            $table->foreign('inquiry_classifier_id')->references('id')->on('inquiry_classifiers')->onDelete('cascade');
            $table->foreign('inquiry_id')->references('id')->on('inquiries')->onDelete('cascade');
        });
    }

    private function upInquiryInquiryLabelPivotTable()
    {
        Schema::create('_inquiry_inquiry_label', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->bigInteger('inquiry_label_id',false, true);
            $table->bigInteger('inquiry_id', false, true);

            $table->foreign('inquiry_label_id')->references('id')->on('inquiry_labels')->onDelete('cascade');
            $table->foreign('inquiry_id')->references('id')->on('inquiries')->onDelete('cascade');
        });
    }

    private function addInquiryTypeIdToInquiry()
    {
        Schema::table('inquiries', function(Blueprint $table){
            $table->bigInteger('inquiry_type_id', false, true);
            $table->foreign('inquiry_type_id')->references('id')->on('inquiry_types')->onDelete('cascade');
        });
    }

    private function addInquiryIdToInquiryEvent()
    {
        Schema::table('inquiry_events', function(Blueprint $table){
            $table->bigInteger('inquiry_id', false, true);
            $table->foreign('inquiry_id')->references('id')->on('inquiries')->onDelete('cascade');
        });
    }

    private function upEmailAddressCustomerPivotTable(){
        Schema::create('_customers_email_addresses', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->bigInteger('customer_id',false, true);
            $table->bigInteger('email_address_id', false, true);

            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('email_address_id')->references('id')->on('email_addresses')->onDelete('cascade');
        });
    }


    private function addEmailTypeIdToEmail()
    {
        Schema::table('email_addresses', function(Blueprint $table){
            $table->bigInteger('email_address_type_id', false, true);
            $table->foreign('email_addresses_email_address_type_id')->references('id')->on('email_address_type');
        });
    }
    

    private function upPhoneNumberCustomerPivotTable(){
        Schema::create('_customers_phone_numbers', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->bigInteger('customer_id',false, true);
            $table->bigInteger('phone_number_id', false, true);

            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('phone_number_id')->references('id')->on('inquiry')->onDelete('cascade');
        });
    }

    private function addPhoneTypeIdToPhone()
    {
        Schema::table('phone_numbers', function(Blueprint $table){
            $table->bigInteger('phone_number_type_id', false, true);
            $table->foreign('phone_numbers_phone_number_type_id')->references('id')->on('phone_number_type');
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inquiry_events', function(Blueprint $table){
            $table->dropForeign('inquiry_events_inquiry_id_foreign');
            $table->dropColumn('inquiry_id');
        });

        Schema::table('inquiries', function(Blueprint $table){
            $table->dropForeign('inquiries_inquiry_type_id_foreign');
            $table->dropColumn('inquiry_type_id');
        });

        Schema::dropIfExists('_inquiry_inquiry_label');
        Schema::dropIfExists('_inquiry_inquiry_classifier');

        Schema::table('inquiries', function(Blueprint $table){
            $table->dropForeign('inquiries_customer_id_foreign');
            $table->dropColumn('customer_id');
        });

        Schema::dropIfExists('_brand_exposure_customer');
        Schema::dropIfExists('_customer_organization');
        Schema::dropIfExists('_customer_school');
        Schema::dropIfExists('_customer_marketing_outreach');
        Schema::dropIfExists('_customer_customer_preference');
        
        Schema::dropIfExists('_customers_phone_numbers');
        Schema::table('phone_numbers', function(Blueprint $table){
            $table->dropForeign('phone_numbers_phone_number_type_id_foreign');
            $table->dropColumn('phone_number_type_id');
        });
        
        Schema::dropIfExists('_customers_email_addresses');
        Schema::table('email_addresses', function(Blueprint $table){
            $table->dropForeign('email_addresses_email_address_type_id_foreign');
            $table->dropColumn('email_address_type_id');
        });
        
        
    }
}
