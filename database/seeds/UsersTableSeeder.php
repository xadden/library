<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'name'     => 'user',
            'email'    => 'user@test.com',
            'password' => Hash::make('password'),
        ));
    }

}
