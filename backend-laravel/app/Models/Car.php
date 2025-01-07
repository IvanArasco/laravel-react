<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    // Si el nombre de la tabla es diferente al plural del modelo, especifica aquí el nombre:
    // protected $table = 'cars';

    // Especifica los campos que pueden ser llenados masivamente
    protected $fillable = ['brand', 'model', 'year', 'color'];
}