<?php

namespace Tests\Unit;


use App\Models\User;

use Tests\TestCase;

class AppTest extends TestCase
{

    public function test_get_index(){
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_create_users(){
        $user1 = User::make([
            'name'=> 'Admin1',
            'email'=>'admin1@admin.com',
            'password'       => bcrypt('password'),
            'remember_token' => null,
        ]);
        $user2 = User::make([
            'name'=> 'Admin2',
            'email'=>'admin2@admin.com',
            'password'       => bcrypt('password'),
            'remember_token' => null,
        ]);

        $this->assertTrue($user1->name!=$user2->name);
        $this->assertTrue($user1->email!=$user2->email);
    }
}
