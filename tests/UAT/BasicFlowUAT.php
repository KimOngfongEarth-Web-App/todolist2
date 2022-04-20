<?php

namespace Tests\Integration;

use PHPUnit\Framework\TestCase;

class BasicFlowUAT extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_fromUAT()
    {
        $this->assertTrue(true);
    }

    public function test_register()
    {
        $response = $this->postJson('/api/user', [
        'name' => 'users',
        'email' => 'sally@example.com',
        'password' => '12345678',]);
 
        $response
            ->assertStatus(201)
            ->assertJson([
                'created' => true,
            ]);

        $this->assertTrue($response['created']);
    }

    public function test_login()
    {
        $user = User::factory()->create();
 
        $response = $this->actingAs($user)
                         ->withSession(['banned' => false])
                         ->get('/');

        $this->actingAs($user, 'web');
    }

    public function test_add_task()
    {
        $task = new Task([
            'description' => null,
            'user_id' => 10
        ]);

        $this->assertEquals(null, $task->description);
    }
    public function test_edit_task()
    {
        $this->assertTrue(true);
    }
    public function test_delete_task()
    {

        $this->assertTrue(true);
    }
}


// all the success case
//add task
//edit
//delete
//register
//login