<?php

use App\Jobs;
use App\User;
use App\Employees;
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
//        factory(User::class)->create();
        factory(Jobs::class,10)->create();
        factory(Employees::class, 150)->create();
    }
}
