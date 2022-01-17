<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Holiday;

class HomePageController extends Controller
{
  public function index()
  {

    return view('welcome');
  }

  public function holiday()
  {
    return view('holiday');
  }
}
