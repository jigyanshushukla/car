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
        return view('cars.index', compact('cars', 'locations')); // Adjust the view name if necessary
    }

    public function showBookingForm()
    {
        $cars = Car::all(); // Retrieve car types from the database
        $locations = Location::all(); // Retrieve locations from the database

        return view('', compact('cars', 'locations')); // Replace with the actual view name
    }
}
