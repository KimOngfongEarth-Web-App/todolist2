<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Task;
use App\Models\User;

class LoginBAT extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_login_form_other_lang()
    {
        $response = $this->postJson('/login', [
            'email' => 'อีเมลภาษาไทย',
            'password' => '12345678',]);
     
            $response
                ->assertStatus(201)
                ->assertJson([
                    'login' => false,
                ]);
    
            $this->assertFalse($response['login']);
    }
    public function test_login_email_format()
    {
        $response = $this->postJson('/login', [
            'email' => 'sallyatexampledotcom',
            'password' => '12345678',]);
     
            $response
                ->assertStatus(201)
                ->assertJson([
                    'login' => false,
                ]);
    
            $this->assertFalse($response['login']);
    }

}

//login failed
//login feild test