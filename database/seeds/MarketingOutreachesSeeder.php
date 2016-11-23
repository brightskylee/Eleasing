<?php

use Illuminate\Database\Seeder;

class MarketingOutreachesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $marketingoutreaches = ["Google", "Social media",
                                "Craigslist", "Apartment Finder",
                                "Friends", "Flyers", "MU housing fair",
                                "Brookside bus"];

        foreach($marketingoutreaches as $source)
            DB::table('marketing_outreaches')->insert([
                'name' => $source
            ]);
    }
}
