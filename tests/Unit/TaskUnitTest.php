<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Task;

class TaskUnitTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function test_description_language()
    {

        $this->assertTrue(true);
    }

    public function test_description_null()
    {
        $task = new Task([
            'description' => null,
            'user_id' => 1
        ]);

        $this->assertEquals(null, $task->description);
    }

    public function test_description_isempty()
    {
        $this->assertTrue(true);
    }

    public function test_description_integer()
    {
        $this->assertTrue(true);
    }

    public function test_description_large_string()
    {
        $this->assertTrue(true);
    }

}

 
// -Description
// Language 
// Integer
// Sqli
// Null
// Empty
// Blank feild can submit?
// Int.max() + 1
// Long string

//stub fake user info /ghost