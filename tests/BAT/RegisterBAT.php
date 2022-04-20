<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class RegisterBAT extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_email_format()
    {
        $response = $this->postJson('/api/user', [
        'name' => 'users',
        'email' => 'sallyatexampledotcom',
        'password' => '12345678',]);
 
        $response
            ->assertStatus(201)
            ->assertJson([
                'created' => False,
            ]);

        $this->assertFalse($response['created']);
    }

    public function test_email_lang()
    {
        $response = $this->postJson('/api/user', [
        'name' => 'users',
        'email' => 'ประยุทธซ่าา',
        'password' => '12345678',]);
 
        $response
            ->assertStatus(201)
            ->assertJson([
                'created' => False,
            ]);

        $this->assertFalse($response['created']);
    }
    public function test_password_space()
    {
        $response = $this->postJson('/api/user', [
        'name' => 'users',
        'email' => 'sally@example.com',
        'password' => '1234 5678',]);
 
        $response
            ->assertStatus(201)
            ->assertJson([
                'created' => False,
            ]);

        $this->assertFalse($response['created']);
    }

    public function test_too_short_password()
    {
        $response = $this->postJson('/api/user', [
        'name' => 'users',
        'email' => 'sallyatexampledotcom',
        'password' => '111',]);
 
        $response
            ->assertStatus(201)
            ->assertJson([
                'created' => False,
            ]);

        $this->assertFalse($response['created']);
    }

    public function test_duplicate_register()
    {
        $this->assertTrue(true);
    }

    
}

//email format
//email language
//password has space
//duplicate register 
//too short password