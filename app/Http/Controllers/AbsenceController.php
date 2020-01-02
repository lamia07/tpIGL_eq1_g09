<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Absence;

class AbsenceController extends Controller
{
  public function AfficherAbs()
  {
    $abs= \DB::table('absences')
    ->join('etudiants', 'absences.id_etudiant', '=', 'etudiants.id')
    ->join('seances', 'absences.id_seance', '=', 'seances.id')
    ->join('groupes', 'absences.id_groupe', '=', 'groupes.id')
    ->select('absences.id','etudiants.matricule','etudiants.nom','etudiants.prenom','date','seances.nom_seance','groupes.nom_groupe')
    ->groupBy('absences.id')
    ->get();
    return $abs;

  }

}
