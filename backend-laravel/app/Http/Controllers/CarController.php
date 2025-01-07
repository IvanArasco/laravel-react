<?php

namespace App\Http\Controllers;

use App\Models\Car;

class CarController extends Controller
{
    public function getCars()
    {
        
        $cars = Car::all(); // Consulta todos los registros de la tabla 'cars'

        // Devuelve los registros en formato JSON return response()->json($cars);

        return view('welcome', compact('cars')); // Pasamos los coches a la vista
    }
}