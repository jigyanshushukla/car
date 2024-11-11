<?php

namespace App\Http\Controllers;

use App\Models\car;
use App\Models\Location;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all(); 
        $locations = Location::all(); 
        return view('front.main', compact('cars', 'locations'));
    }

    // public function showBookingForm()
    // {
    //     $cars = Car::all(); // Retrieve car types from the database
    //     $locations = Location::all(); // Retrieve locations from the database

    //     return view('', compact('cars', 'locations')); // Replace with the actual view name
    // }
}
