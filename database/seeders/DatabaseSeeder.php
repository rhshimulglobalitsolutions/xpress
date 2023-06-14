<?php

namespace Database\Seeders;
use App\Models\Task;
use Database\Factories\TaskFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        Task::factory()->times(50)->create();//we will generate 50 records
    }
}
