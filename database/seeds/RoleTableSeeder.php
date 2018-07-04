<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Model\Role::truncate();

        $role = new \App\Model\Role();
        $role->name = "admin";
        $role->save();

        $role = new \App\Model\Role();
        $role->name = "user";
        $role->save();

        $role = new \App\Model\Role();
        $role->name = "moderator";
        $role->save();
    }
}
