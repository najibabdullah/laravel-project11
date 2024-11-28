<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Department>
 */
class DepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->unique()->randomElement([
                'PPLG',
                'DKV DG',
                'DKV TG',
                'ANIMASI 2D',
                'ANIMASI 3D'
            ]),
            'desc' => fake()->text()
        ];
    }
}
