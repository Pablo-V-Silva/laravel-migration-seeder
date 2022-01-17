<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Holiday;

class HomePageController extends Controller
{
  public function index()
  {
    $holidays = Holiday::all();
    return view('welcome', compact('holidays'));
  }

  public function holiday()
  {
    return view('holiday');
  }
}
