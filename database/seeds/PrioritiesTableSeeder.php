<?php

use Illuminate\Database\Seeder;
use App\Priority;

class PrioritiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Priority::truncate();
        Priority::insert([
            'priority' => 'Immediate',
            'color' => 'danger',
        ]);
        Priority::insert([
            'priority' => 'Urgent',
            'color' => 'warning',
        ]);
        Priority::insert([
            'priority' => 'Normal',
            'color' => 'info',
        ]);
        Priority::insert([
            'priority' => 'Low',
            'color' => 'success',
        ]);
        Priority::insert([
            'priority' => 'Postponed',
            'color' => 'dark',
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
