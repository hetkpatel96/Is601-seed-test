<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = User::inRandomOrder()->first();
        $this->assertInternalType('int' , $user->id);
        //$this->assertInstanceOf('App\User' , $user);

    }

    public function testInstance()
    {
        $user = User::inRandomOrder()->first();
        $this->assertInternalType('string', $user->name);
        $this->assertFinite($user->id);
    }
    public function testExample2()
    {
        $user = User::inRandomOrder()->first();
        $this->assertInternalType("float", 4.2);
    }

    public function testExist()
    {
        $this->assertFileExists('/home/hetpatel/PhpstormProjects/IS601-seeding-testing/tests/Unit/UserTest.php');
    }

}
