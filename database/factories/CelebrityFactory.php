<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CelebrityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'star' => fake()->text,
            'title1' => fake()->text,
            'body1' => fake()->text,
            'attachment1' =>fake()->image('public/image'),
            'attachment2' => fake()->image('public/image'),

            'title2' => fake()->text,
            'body2' => fake()->text,
            'attachment3' => fake()->image('public/image'),
            'attachment4' => fake()->image('public/image'),

            'title3' => fake()->text,
            'body3' => fake()->text,
            'attachment5' => fake()->image('public/image'),

            'title4' => fake()->text,
            'body4' => fake()->text,

            'user_id' => \App\Models\User::factory(),
        ];
    }
}
