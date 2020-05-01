<?php

use Illuminate\Database\Factories;
use Illuminate\Database\Seeder;
use App\Action;

class ActionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Action::truncate();
        Action::unguard();
        // factory(Action::class, 800)->create();
        Action::reguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
