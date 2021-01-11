<?php

namespace Database\Seeders;

use App\Models\LDXPS\Customer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        
        \App\Models\LDXPS\Vendor::factory(10)
                                    ->has(Customer::factory(13))
                                    ->create();

    }
}
