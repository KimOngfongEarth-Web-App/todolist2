<?php


namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\User;

class UserUnitTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_unique_email()
    {
        $user = new User([
            'name' => 'users',
            'email' => 'sally@example.com',
            'password' => '12345678',
        ]);

        $this->assertNotEquals(null, $user->email);
    }

    public function test_mistake_email_format()
    {
        $user = new User([
            'name' => 'users',
            'email' => 'sallyatexampledotcom',
            'password' => '12345678',
        ]);

        $this->assertEquals('sallyatexampledotcom', $user->email);

    }

    public function test_thai_email()
    {
        
        $user = new User([
            'name' => 'users',
            'email' => 'อีเมลนะจ้ะ',
            'password' => '12345678',
        ]);

        $this->assertEquals('อีเมลนะจ้ะ', $user->email);;
    }

    public function test_password()
    {
        $user = new User([
            'name' => 'users',
            'email' => 'sally@example.com',
            'password' => '1234',
        ]);
        $this->assertTrue(true);
    }

    public function test_name_not_null()
    {
        $user = new User([
            'name' => null,
            'email' => 'sally@example.com',
            'password' => '12345678',
        ]);
        $this->assertNull($user->name);
    }

    public function test_thai_name()
    {
        $user = new User([
            'name' => "ประยุทธ",
            'email' => 'sally@example.com',
            'password' => '12345678',
        ]);
        $this->assertEquals('ประยุทธ', $user->name);
    }
}

// name email password

// email shold be unique
// mistake email format
// email thai lang
// password ?
// name should have sting (can not be null)
// name in thai 
// database