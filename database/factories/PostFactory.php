<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(4),
            'user_id'=>mt_rand(1,5),
            'slug' => $this ->faker->slug(),
            'expert' => $this ->faker->paragraph(1),
            'body' => $this ->faker->paragraph(50)
        ];
    }
}
