<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Models\Customers\Customer;
use App\Models\Customers\EmailAddress as EmailAddress;
use App\Models\Customers\EmailAddressType as EmailAddressType;
use App\Models\Customers\PhoneNumber as PhoneNumber;
use App\Models\Customers\PhoneNumberType as PhoneNumberType;
class CustomerCreationTest extends TestCase
{
    use DatabaseTransactions; //Rollback when tests are done
    /**
     * Asserts that a customer was created
     * Asserts that email address and phone number relationships can be saved and associated with the customers.
     * Asserts that relationships between email addresses and customers is working
     * Asserts that relationships between phone numbers and customers is working.
     *
     * @return void
     */
    public function testCreateCustomer()
    {
        $ran = false;
        
        //Create the customer objects, associate them with email addresses and phone numbers.
        $customers = factory(Customer::class, 50)
            ->create()
            ->each(function($customer){
                $customer->emailAddresses()->save(factory(EmailAddress::class)->create());
                $customer->phoneNumbers()->save(factory(PhoneNumber::class)->create());
            });
        
        
        //Run through each customer, make sure that we can find an email address and phone number for them.
        // Test to make sure these models can access and find each other.
        foreach($customers as $customer){
            $ran = true;
            $email = $customer->emailAddresses->first();
            $emailCustomer = $email->customer->first();
            
            $phone = $customer->phoneNumbers->first();
            $phoneCustomer = $phone->customer->first();
            
            $this->assertTrue(isset($email->id), 'Customer->Email relationship ok.');
            $this->assertTrue(isset($phone->id), 'Customer->Phone relationship ok.');
            $this->assertTrue(isset($emailCustomer->id), 'Email->Customer relationship ok.');
            $this->assertTrue(isset($phoneCustomer->id), 'Phone->Customer relationship ok.');
            $this->assertTrue($emailCustomer->id == $customer->id, 'Email customer id is equal to parent customer id.');
            $this->assertTrue($phoneCustomer->id == $customer->id, 'Phone customer id is equal to parent customer id.');
        };

        
        $this->assertTrue($ran, 'Testing that customers were found and other assertions ran.');
    }   
    
}
