<?php

namespace Database\Factories;

use App\Models\Formation;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class FormationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Formation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titre' => $this->faker->text(255),
            'description' => $this->faker->text,
            'prix' => $this->faker->randomNumber(2),
            'duree' => $this->faker->text(255),
            'user_id' => \App\Models\User::factory(),
            'categorie_id' => \App\Models\Categorie::factory(),
            'type_formation_id' => \App\Models\TypeFormation::factory(),
        ];
    }
}
