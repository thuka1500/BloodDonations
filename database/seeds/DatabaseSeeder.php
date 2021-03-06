<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(AddressesSeeder::class);
        $this->call(DonorsSeeder::class);
        $this->call(BloodRequestSeeder::class);
        $this->call(BloodContainerSeeder::class);
        $this->call(DonationsSeeder::class);
    }
}
