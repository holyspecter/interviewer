<?php

use Illuminate\Database\Seeder;

class PositionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('positions')->insert([
            'title' => 'Senior HTML Engineer',
            'company_id' => 1,
            'description' => 'Awesome position',
        ]);
    }
}
