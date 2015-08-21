<?php

use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'name' => 'Dummy company',
            'description' => 'Some dummy company for tests',
            'homepage' => 'http://dou.ua',
        ]);
    }
}
