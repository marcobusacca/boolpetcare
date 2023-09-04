<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Vaccination;
use App\Models\Disease;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'data_di_nascita', 'genere', 'note_aggiuntive'];

    public function vaccinations(){
        return $this->belongsToMany(Vaccination::class)->withPivot('data_di_vaccinazione', 'dosaggio', 'note_vaccino');
    }
    public function diseases(){
        return $this->belongsToMany(disease::class)->withPivot('data_di_ricovero', 'trattamento', 'note_vaccino');
    }
}
