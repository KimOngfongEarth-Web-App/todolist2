<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'id' => 1,
        //     'name' => 'one',
        //     'email' => 'one@gmail.com',
        //     'password' => 'password'
            
        // ]);

        DB::table('tasks')->insert([
            'description' => Str::random(10),
            'user_id' => 'kim@gmail.com',
            
        ]);
    }
}
