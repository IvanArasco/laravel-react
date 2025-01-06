<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    function getCars(){
        $cars = [
            ['id' => 1, 'name' => 'Coche1', 'brand' => 'Marca1', 'year' => 2020],
            ['id' => 2, 'name' => 'Coche2', 'brand' => 'Marca2', 'year' => 2021],
            ['id' => 3, 'name' => 'Coche3', 'brand' => 'Marca3', 'year' => 2022],
        ];

        return response()->json($cars);
    }
}
