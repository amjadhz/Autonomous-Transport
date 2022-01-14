<?php

namespace Tests\Unit;

use App\Models\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function test_delete_user(){
        $user = User::factory()->count(1)->make();
//        $user = User::first();

        if($user){
            $user->delete();
        }
        $this->assertTrue(true);
    }
}
