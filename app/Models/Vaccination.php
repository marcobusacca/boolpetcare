<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Animal;

class Vaccination extends Model
{
    use HasFactory;

    protected $fillable = ['animal_id', 'nome', 'data_di_vaccinazione', 'dosaggio', 'note_aggiuntive'];

    public function animal(){
        return $this->belongsTo(Animal::class);
    }
}
