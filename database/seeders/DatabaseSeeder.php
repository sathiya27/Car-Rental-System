<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Car;
use App\Models\CarModel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            LocationSeeder::class,
        ]);

        $myvi = CarModel::factory()->myvi()->create();
        Car::factory()->count(4)->for($myvi)->create();

        $vellfire = CarModel::factory()->vellfire()->create();
        Car::factory()->count(4)->for($vellfire)->create();

        $x70 = CarModel::factory()->x70()->create();
        Car::factory()->count(4)->for($x70)->create();

        $saga = CarModel::factory()->saga()->create();
        Car::factory()->count(4)->for($saga)->create();

        /* CarModel::factory()->vellfire()->create()->each(function($vellfire){
            Car::factory()->count(3)
                ->for($vellfire)
                ->create();
        });

        CarModel::factory()->x70()->create()->each(function($x70){
            Car::factory()->count(3)
                ->for($x70)
                ->create();
        });

        CarModel::factory()->saga()->create()->each(function($saga){
            Car::factory()->count(3)
                ->for($saga)
                ->create();
        }); */
    }
}
