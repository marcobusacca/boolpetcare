<?php

namespace Database\Seeders;
use App\Models\Disease;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiseaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $diseases = config('diseases');

        foreach ($diseases as $item) {
            
            $disease = new Disease();

            $disease->nome = $item['nome'];

            $disease->save();
        }
    }
}
