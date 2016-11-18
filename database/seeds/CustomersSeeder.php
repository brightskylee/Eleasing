<?php

use Illuminate\Database\Seeder;

use App\Models\Customers\Customer as Customer;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create Models
        factory(Customer::class, 50)->create();
    }
}
