<?php

namespace Database\Seeders;

use App\Helper\HungarianCountiesAndCities;
use Illuminate\Database\Seeder;
use App\Models\City;
use App\Models\County;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countyIds = County::pluck('id', 'name');

        foreach (array_keys(HungarianCountiesAndCities::$countyAndCityData) as $countyName){
            foreach (HungarianCountiesAndCities::$countyAndCityData[$countyName]['cities'] as $name){
                City::firstOrCreate([
                    'county_id' => $countyIds[$countyName],
                    'name' => $name,
                ],
                [
                    'zip_code' => fake()->numberBetween(1000, 9999),
                    'population' => fake()->numberBetween(1000, 1000000)
                ],
                );
            }
        }
    }
}
