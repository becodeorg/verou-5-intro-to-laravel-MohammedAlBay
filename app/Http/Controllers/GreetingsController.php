<?php

// Giving a namespace to the GreetingsController class:
namespace App\Http\Controllers;

// Using the Controller class by calling the Controller's namespace:
use App\Http\Controllers\Controller;

// GreetingsController class:
class GreetingsController extends Controller
{
  // The "index" method loading the page.
  public function index()
  { 
    // Returning the "greetings.blade.php" file as a view.
    return view("greetings");
  }
}