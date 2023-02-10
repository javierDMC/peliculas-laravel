<?php

namespace App\Models;

use App\Models\Pelicula;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Director extends Model
{
    use HasFactory;

    public function peliculas(){
        return $this->hasMany(Pelicula::class);
    }
}
