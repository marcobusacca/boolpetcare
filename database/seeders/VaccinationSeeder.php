<?php

namespace Database\Seeders;

use App\Models\Vaccination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class VaccinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 1; $i <= 10; $i++){
            $vaccination = new Vaccination();

            $vaccination->nome = $faker->word();
    
            $vaccination->save();
        }
    }
}
