<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. this benefits from mass-assignment
        // 2. create 5 tasks
        for ($i = 1; $i <= 5; $i++) {
            Task::create([
                'name' => 'Sample Task',
                'priority' => 1,
            ]);
        }
    }
}
