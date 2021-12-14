<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeerder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name'=> 'Admin',
                'email'=>'admin@admin.com',
                'password'       => bcrypt('password'),
                'remember_token' => null,
            ],
            [
                'name'=> 'Admin 2',
                'email'=>'admin2@admin.com',
                'password'       => bcrypt('password'),
                'remember_token' => null,
            ]
        ];

        User::insert($user);
    }
}
