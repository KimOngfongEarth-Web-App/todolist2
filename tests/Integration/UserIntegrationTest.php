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


    //ถ้า user ถูกลบ task ควรถูกลบด้วย
    public function delete_user_task_should_delete()
    {
        $this->assertTrue(true);
    }


    //ถ้าลบ task User ไม่ควรถูกลบ
    public function delete_task_user_should_not_delete()
    {
        $this->assertTrue(true);
    }

    //1 user มี 0 task
    public function one_user_has_task()
    {
        $this->assertTrue(true);
    }

    //1 user จะมีกี่ task ก็ได้หรือแทนด้วย n
    public function one_user_has_n_task()
    {
        $this->assertTrue(true);
    }

    //1 user มีหลาย task ใน id เดียวกัน
    public function one_user_has_multiple_task_with_same_id()
    {
        $this->assertTrue(true);
    }


    //2 user มี task ที่เหมือนกัน
    public function two_user_has_same_task()
    {
        $this->assertTrue(true);
    }


    //task ไม่สามารถทำได้โดยไม่มี user ได้
    public function task_without_user()
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