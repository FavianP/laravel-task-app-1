<?php

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
Task::create([
'task_name' => 'Take out trash',
'task_location' => 'Kitchen',
'time_complexity' => 1, // (1 => ~10 min, 2 => ~30 min, etc.)
'materials_required'=> 'Trash bags',
'deadline' => '2025-02-20 10:00:00',
'priority' => 2, // (1 => low, 2 => medium, 3 => high)
'category' => 'chores'
]);

Task::create([
'task_name' => 'Wash the dishes',
        'task_location' => 'Kitchen',
        'time_complexity' => 2, // ~30 min
        'materials_required' => 'Dish soap, sponge',
        'deadline' => '2025-02-20 18:00:00',
        'priority' => 3, // High priority
        'category' => 'chores'
]);


Task::create([
 'task_name' => 'Vacuum the living room',
        'task_location' => 'Living Room',
        'time_complexity' => 3, // ~45 min
        'materials_required' => 'Vacuum cleaner',
        'deadline' => '2025-02-21 12:00:00',
        'priority' => 2, // Medium priority
        'category' => 'chores'
]);


Task::create([
 'task_name' => 'Do the laundry',
        'task_location' => 'Laundry Room',
        'time_complexity' => 4, // ~1 hour
        'materials_required' => 'Detergent, fabric softener',
        'deadline' => '2025-02-22 15:00:00',
        'priority' => 2, // Medium priority
        'category' => 'chores'
]);

Task::create([
'task_name' => 'Take the dog for a walk',
        'task_location' => 'Neighborhood Park',
        'time_complexity' => 2, // ~30 min
        'materials_required' => 'Leash, dog treats, poop bags',
        'deadline' => '2025-02-24 09:00:00',
        'priority' => 3, // High priority
        'category' => 'chores'
]);



}}