<?php

namespace App\Http\Controllers\cvs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Generateur extends Controller
{
  public function index()
  {
    return view('content.cvs.generateur-cvs');
  }
}