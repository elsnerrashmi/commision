<?php

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
        \App\User::create([
            'name' => 'Admin',
            'email' => 'admin@commisionportal.com',
            'password' => bcrypt('admin@123'),
            'role_id' => '1',
        ]);
    }
}
