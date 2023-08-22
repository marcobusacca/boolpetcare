<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'specie', 'data_di_nascita', 'genere', 'nome_proprietario', 'cognome_proprietario', 'note_aggiuntive'];

}
