<?php

use Illuminate\Database\Factories;
use Illuminate\Database\Seeder;
use App\Company;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Company::truncate();
        Company::create([
            'name' => 'CMoney',
            'description' => 'creates more money !',
            'user_id' => 1,
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
