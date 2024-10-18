<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarModel>
 */
class CarModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'modelName' => 'carModelName',
            'numOfSeats' => fake()->numberBetween(4,5),
            'numOfDoors' => 4,
            'fuelType' => 'Ron 95',
            'pricePerDay'=> null,
            'hasAc'=> true,
            'carImage'=>null,
        ];
    }

    public function myvi()
    {
        return $this->state(function(array $attributes){
            return[
                'modelName'=>'Myvi',
                'numOfSeats'=>4,
                'numOfDoors'=>4,
                'fuelType'=>'Ron 95/ Ron 97',
                'pricePerDay'=> 50.00,
                'hasAc'=>true,
            ];
        });
    }

    public function vellfire()
    {
        return $this->state(function(array $attributes){
            return[
                'modelName'=>'VellFIRE V6',
                'numOfSeats'=>7,
                'numOfDoors'=>4,
                'fuelType'=>'Ron 95/ Ron 97',
                'pricePerDay'=> 200.00,
                'hasAc'=>true,
            ];
        });
    }

    public function x70()
    {
        return $this->state(function(array $attributes){
            return [
                'modelName'=>'Proton X70',
                'numOfSeats'=>5,
                'numOfDoors'=>4,
                'fuelType'=>'Ron 95/ Ron 97',
                'pricePerDay'=> 100.00,
                'hasAc'=>true,
            ];
        });
    }

    public function saga()
    {
        return $this->state(function(array $attributes){
            return[
                'modelName'=>'Proton Saga',
                'numOfSeats'=>4,
                'numOfDoors'=>4,
                'fuelType'=>'Ron 95/ Ron 97',
                'pricePerDay'=> 70.00,
                'hasAc'=>true,
            ];
        });
    }
}
