<?php

namespace App\Http\Controllers\Portal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AspirantesController extends Controller
{
  public function __construct(){
      $this->middleware('auth');
  }
  public function index()
  {
      return view('frontend.dashboard.aspirantes');
  }
}
