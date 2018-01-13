<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new Role();
        $data->name = 'Admin';
        $data->save();

        $data = new Role();
        $data->name = 'Member';
        $data->save();
    }
}
