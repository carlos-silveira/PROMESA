<?php

namespace App\Http\Controllers\Portal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AspirantesController extends Controller
{
  public function index()
  {
      return view('frontend.dashboard.aspirantes');
  }
}
