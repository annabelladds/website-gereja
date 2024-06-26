<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

class BeritaFactory extends Factory
{
    /**
     * @return array<string
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(mt_rand(4,8)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(mt_rand(3,4)),
            'body' => collect($this->faker->paragraphs(mt_rand(5,10)))
                        ->map(fn($p) => "<p>$p</p>")
                        ->implode(''),
            'user_id' => mt_rand(1,2),
            'kategori_id' => mt_rand(1,11)
        ];
    }
}
