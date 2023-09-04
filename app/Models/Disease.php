<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    use HasFactory;
    protected $fillable = ['nome'];

    public function animals(){
        return $this->belongsToMany(Animal::class)->withPivot('data_di_ricovero', 'trattamento', 'note_malattia');
    }
}
