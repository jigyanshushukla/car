<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
  public function index()
  {
      // $cars = Car::take(10)->get(); 
      // return view('front.main', compact('cars'));

    $cars = Car::take(10)->get();
    dd($cars); 
    return view('front.main', compact('cars'));
}

  
  
   public function about()
 {
      return view('front.about');
 }
   public function services()
 {
      return view('front.services');
 }
 public function blog()
 {
   return view('front.blog');
 }
 public function feature()
 {
   return view('front.feature');
 }
 public function cars()
 {
   return view('front.cars');
 }
 public function team()
 {
   return view ('front.team');
 }
 public function testimonial()
 {
  return view('front.testimonial');
 }
 public function contact(){
  return view ('front.contact');
 }
 
}
