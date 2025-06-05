<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
   
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'file'  => $this->faker->imageUrl(640, 480, 'article', true),
            'descriptions' => $this->faker->paragraphs(3, true),
            'user_id' => $this->faker->numberBetween(1,5),
            'category_id' => $this->faker->numberBetween(1, 5),
            'status' => 'active'
        ];
    }
}
