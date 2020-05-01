<?php

use Illuminate\Database\Factories;
use Illuminate\Database\Seeder;
use App\KeyResult;

class KeyResultsTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        KeyResult::truncate();
        KeyResult::unguard();
        // factory(KeyResult::class, 800)->create();
        KeyResult::reguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
