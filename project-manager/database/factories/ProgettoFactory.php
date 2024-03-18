<?php

namespace Database\Factories;

use App\Models\Progetto;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProgettoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Progetto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       
        $utente_id = User::inRandomOrder()->first()->id;

        return [
            'nome' => $this->faker->sentence,
            'descrizione' => $this->faker->paragraph,
            'stato' => $this->faker->randomElement(['in_corso', 'concluso']), 
            'utente_id' => $utente_id,
        ];
    }
}
