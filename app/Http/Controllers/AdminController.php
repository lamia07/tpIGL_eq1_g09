<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Admin;

class AdminController extends Controller
{
  public function getAbs()
  {
      $absences = Absence::all()->toArray();
      return array_reverse($absences);
  }
}
