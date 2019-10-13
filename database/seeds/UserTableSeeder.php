<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Maki',
            'email' => 'maki.bsmanna@gmail.com',
            'password' => bcrypt('Secret123'),
        ]);
    }
}
