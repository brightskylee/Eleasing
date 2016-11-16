<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Models\Customers\Customer;

class CustomerCreationTest extends TestCase
{
    use DatabaseTransactions; //Rollback when tests are done
    /**
     * Asserts that a customer was created
     *
     * @return void
     */
    public function testCreateCustomer()
    {
        $customer = factory(Customer::class)->create();
        $assert = isset($customer->id);
        $this->assertTrue($assert);
    }
}
