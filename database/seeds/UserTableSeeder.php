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
            'name' => 'John Smith',
            'email' => 'john@example.com',
            'password' => bcrypt('123'),
            'remember_token' => str_random(10),
            'company_id' => 1,
        ]);
    }
}
