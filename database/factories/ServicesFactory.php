<?php

namespace Database\Factories;

use App\Models\Services;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

class ServicesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Services::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = FakerFactory::create();

        return [
            'color' => $faker->colorName,
            'icon' => $faker->word,
            'title' => $faker->sentence(5),
            'description' => $faker->paragraph(2),
            'link' => $faker->url,
            'status' => $faker->boolean,
        ];
    }
}
