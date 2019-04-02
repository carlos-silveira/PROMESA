<?php

namespace App\Http\Controllers\Portal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlumnosController extends Controller
{
  public function index()
  {
      return view('frontend.dashboard.alumnos');
  }
}
