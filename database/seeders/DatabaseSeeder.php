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
        
        
        \App\Models\LDXPS\Vendor::factory(5)
                                    ->has(Customer::factory(10))
                                    ->create();

    }
}
