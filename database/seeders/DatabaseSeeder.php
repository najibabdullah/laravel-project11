<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Grade;
use App\Models\Student;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Department::factory(5)->create();
        Grade::factory(36)->create();
         Student::factory(200)->create();




    }
}
