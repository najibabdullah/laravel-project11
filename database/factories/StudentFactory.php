<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Grade;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),
            'grade_id' =>  $gradeId = fake()->numberBetween(1,34),
            'department_id' => function () use ($gradeId) {
                $grade = Grade::find($gradeId);
                if ($grade) {
                    if (str_contains($grade->nama, 'PPLG')) {
                        return Department::where('nama', 'PPLG')->value('id');
                    } elseif (preg_match('/ANIMASI (1|2|3)/', $grade->nama)) {
                        return Department::where('nama', 'ANIMASI 3D')->value('id');
                    } elseif (preg_match('/ANIMASI (4|5)/', $grade->nama)) {
                        return Department::where('nama', 'ANIMASI 2D')->value('id');
                    } elseif (preg_match('/DKV (1|2)/', $grade->nama)) {
                        return Department::where('nama', 'DKV DG')->value('id');
                    } elseif (preg_match('/DKV (3|4|5)/', $grade->nama)) {
                        return Department::where('nama', 'DKV TG')->value('id');
                    }
                }
               return null;
            },
            'email' => fake()->unique()->safeEmail(),
           'alamat' => fake()->address()
        ];
    }
}
