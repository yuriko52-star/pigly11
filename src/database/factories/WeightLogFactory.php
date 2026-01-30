<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\WeightLog;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class WeightLogFactory extends Factory
{
    protected $model = WeightLog::class;
    // ないとエラーになるよ
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'date' =>$this->faker->date('Y-m-d'),
            'weight' =>$this->faker->randomFloat(1,50.0, 80.0),
            'calories' =>$this->faker->numberBetween(1000, 2500),
            'exercise_time' =>$this->faker->time('H:i:s'),
            'exercise_content' =>$this->faker->sentence()
        ];;
    }
}
