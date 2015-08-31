<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Interviewer\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

         $this->call('CompanyTableSeeder');
         $this->call('PositionTableSeeder');

        factory(User::class, 2)->create();

        Model::reguard();
    }
}
