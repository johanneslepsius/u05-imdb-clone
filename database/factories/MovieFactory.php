<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Movie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'actors' => $this->faker->words(3, true),
            'language' => $this->faker->word(),
            'release_date' => $this->faker->randomNumber(6, true),
            'movie_genres' => $this->faker->words(3, true),
        ];
    }
}
