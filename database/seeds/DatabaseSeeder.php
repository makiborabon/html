<?php

use Illuminate\Database\Seeder;
use App\BillingType;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(BillingTypeSeeder::class);
        
    }
}
