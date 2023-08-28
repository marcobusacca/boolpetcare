<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Animal;

class Vaccination extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];

    public function animals(){
        return $this->belongsToMany(Animal::class);
    }
}
