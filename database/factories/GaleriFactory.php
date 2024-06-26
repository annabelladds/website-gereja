<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Galeri>
 */
class GaleriFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        $date = $this->faker->date;
        $days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
        $dateObj = new \DateTime($date);
        $dayName = $days[$dateObj->format('w')];
        $formattedDate = $dayName . ', ' . \Carbon\Carbon::parse($date)->locale('id')->isoFormat('D MMMM YYYY');

        // return [
        //     'title' => $this->faker->sentence,
        //     'event_date' => $date,
        //     'formatted_date' => $formattedDate,
        // ];

        return [
            'title' => $this->faker->sentence(mt_rand(4,7)),
            'slug' => $this->faker->slug(),
            'url' => $this->faker->url(),
            // 'time' => $this->faker->dateTime(),
            'user_id' => mt_rand(1,2),
            'event_date' => $date,
            'formatted_date' => $formattedDate,
        ];
    }
}
