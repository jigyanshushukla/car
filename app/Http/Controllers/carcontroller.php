<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Location;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all(); // Get all car types
        $locations = Location::all(); // Get all locations
        return view('cars.index', compact('cars', 'locations'));
    }
}

