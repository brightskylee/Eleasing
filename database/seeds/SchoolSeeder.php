<?php

use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $school_array = ["Mizzou", "Columbia College", "Stephens College", "MACC", "Other", "Not Enrolled"];
        foreach($school_array as $school)
            DB::table('schools')->insert([
                'name' => $school
            ]);
    }
}
