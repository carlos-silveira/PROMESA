<?php

namespace App\Http\Controllers\Portal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GruposController extends Controller
{
  public function index()
  {
      return view('frontend.dashboard.grupos');
  }
}