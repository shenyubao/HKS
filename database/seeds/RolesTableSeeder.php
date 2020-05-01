<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Role::truncate();
        Role::create([
            'name' => '擁有者'
        ]);
        Role::create([
            'name' => '管理者'
        ]);
        Role::create([
            'name' => '編輯'
        ]);
        Role::create([
            'name' => '成員'
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
