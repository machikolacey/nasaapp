<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ApodFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'title'		 			=> $this->faker->sentence(),
      'url' 					=> $this->faker->imageUrl(824, 611),
      'hdurl' 				=> $this->faker->imageUrl(824, 611),
      'explanation' 	=> $this->faker->paragraph(),
      'published_at' 	=> $this->faker->dateTime(),
    ];
	}

}
