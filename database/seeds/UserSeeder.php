<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new User();
        $data->name = 'Aquilla';
        $data->email = 'aquillask@gmail.com';
        $data->password = bcrypt('a1b2c3');
        $data->role_id = 1;
        $data->save();

        $data = new User();
        $data->name = 'Stephanus';
        $data->email = 'stephanusar@gmail.com';
        $data->password = bcrypt('123123');
        $data->role_id = 2;
        $data->save();
    }
}
