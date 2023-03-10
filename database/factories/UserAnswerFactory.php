<?php

namespace Database\Factories;

use App\Models\UserAnswer;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserAnswerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserAnswer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>rand(2,10),
            'question_id'=> rand(1,100),
            'answer' => 'answer'.rand(1,4)
        ];
    }
}
