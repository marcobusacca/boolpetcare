<?php

namespace Database\Seeders;

use App\Models\Vaccination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class VaccinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vaccinations = config('vaccinations');

        foreach ($vaccinations as $item) {
            
            $vaccination = new Vaccination();

            $vaccination->nome = $item['nome'];

            $vaccination->save();
        }
    }
}