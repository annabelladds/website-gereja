<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

class GaleriFactory extends Factory
{
    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        $date = $this->faker->date;
        $days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
        $dateObj = new \DateTime($date);
        $dayName = $days[$dateObj->format('w')];
        $formattedDate = $dayName . ', ' . \Carbon\Carbon::parse($date)->locale('id')->isoFormat('D MMMM YYYY');

        return [
            'title' => $this->faker->sentence(mt_rand(4,7)),
            'slug' => $this->faker->slug(),
            'url' => $this->faker->url(),
            'user_id' => mt_rand(1,2),
            'event_date' => $date,
            'formatted_date' => $formattedDate,
        ];
    }
}
