<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Warta>
 */
class WartaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(mt_rand(3, 4)),
            'slug' => $this->faker->slug(),
            'user_id' => mt_rand(1,2),
            // 'url' => $this->faker->url(),
            'published_at' => $this->faker->dateTime()
        ];
    }
}
