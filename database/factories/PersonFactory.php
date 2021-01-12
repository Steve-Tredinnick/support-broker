<?php

namespace Database\Factories;

use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Person::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->faker->locale('en-GB');

        $gender = $this->faker->randomElement(['male', 'female']);

        return [
            'first_name' => $this->faker->firstname($gender),
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'gender' => $gender,
            'address' => $this->faker->address,
            'dob' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'password' => bcrypt('secret')
        ];
    }
}
