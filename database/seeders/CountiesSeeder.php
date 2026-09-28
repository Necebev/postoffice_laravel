<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\County;
use App\Helper\HungarianCountiesAndCities;

class CountiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (array_keys(HungarianCountiesAndCities::$countyAndCityData) as $countyName){
            County::firstOrCreate(
                ['name' => $countyName],
                ['badge' => HungarianCountiesAndCities::$countyAndCityData[$countyName]['image']]
            );
        }
    }
}
