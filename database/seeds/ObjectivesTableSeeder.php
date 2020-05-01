<?php

use Illuminate\Database\Seeder;
use App\Objective;

class ObjectivesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Objective::truncate();
        Objective::unguard();
        // factory(Objective::class, 400)->create();
        Objective::reguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
