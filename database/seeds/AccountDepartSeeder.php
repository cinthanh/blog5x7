<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker; // require

class AccountDepartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $account = factory(\App\Account::class, 10)->create();
        $depart = factory(\App\Department::class, 50)->create();
    }
}
