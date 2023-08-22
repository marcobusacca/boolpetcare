<?php

namespace Database\Seeders;

use App\Models\Animal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Faker\Provider\en_US\Person;



class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 1; $i <= 10; $i++){
            $animal = new Animal();

            $animal->nome = $faker->firstName();
            $animal->specie = $faker->word();
            $animal->data_di_nascita = $faker->date();
            $animal->genere = $faker->word();
            $animal->nome_proprietario= $faker->firstName();
            $animal->cognome_proprietario= $faker->lastName();
            $animal->note_aggiuntive= $faker->paragraph();
    
            $animal->save(); 
        }
    }
}
