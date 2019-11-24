<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Admin;

class AdminController extends Controller
{
    public function AfficherAbs($nom_grp)
    {
      $abs= \DB::table('absences')
      ->join('seances', 'absences.id_seance', '=', 'seances.id')
      ->select('absences.id','nom_etudiant','date','seances.nom_seance')
      ->where('absences.nom_groupe',$nom_grp)
      ->groupBy('absences.id')
      ->get();
      return view ('interfaceAdmin',['abs'=>$abs]);

    }
}
