<?php

namespace Database\Seeders;

use App\Models\Animal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $animals = config('animals');

        foreach ($animals as $item) {
            
            $animal = new Animal();

            $animal->nome = $item['nome'];
            $animal->data_di_nascita = $item['data_di_nascita'];
            $animal->genere = $item['genere'];
            $animal->note_aggiuntive = $item['note_aggiuntive'];

            $animal->save();
        }
    }
}