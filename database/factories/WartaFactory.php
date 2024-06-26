<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

class WartaFactory extends Factory
{
    /**
     * @return array<string
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(mt_rand(3, 4)),
            'slug' => $this->faker->slug(),
            'user_id' => mt_rand(1,2),
            'published_at' => $this->faker->dateTime()
        ];
    }
}
