<?php

namespace Database\Factories;

use App\Models\Demande;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class DemandeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Demande::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->text(255),
            'prenom' => $this->faker->text(255),
            'email' => $this->faker->email,
            'tel' => $this->faker->text(11),
            'photo' => $this->faker->text(255),
            'user_id' => \App\Models\User::factory(),
        ];
    }
}
