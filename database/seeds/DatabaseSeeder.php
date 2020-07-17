<?php

use App\Allfunction;
use App\Allindustry;
use App\Authority;
use App\Availability;
use App\Company;
use App\Experience;
use App\Login;
use App\State;
use App\Student;
use App\User;
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
        // $this->call(UserSeeder::class);
        factory(State::class, 16)->create();
        // factory(Login::class, 32)->create();
        factory(User::class, 32)->create();

        factory(Company::class, 32)->create();
        factory(Student::class, 32)->create();

    }
}
