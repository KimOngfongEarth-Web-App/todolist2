<?php



use PHPUnit\Framework\TestCase;

class UserIntegrationTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_fromintegration()
    {
        $this->assertTrue(true);
    }
}


// if delete user task should delete too
// if delete task user should not delete
// 1 user has 0 task
// 1 user has n task
// 1 user has multiple task with same id
// 2 user has same task
// task without user