<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Etudiant;
use App\Groupe;
class AdminController extends Controller
{
  public function create()
  {
    return view ('inscription');
  }
  public function store(Request $request){
    $etud = \DB::table('etudiants')->where('matricule',request('matricule'))->first();
    if (is_null($etud)) {
      $etudiant = new Etudiant();
      $etudiant->nom =$request->input('nom');
      $etudiant->prenom =$request->input('prenom');
      $etudiant->matricule =$request->input('matricule');
      $etudiant->email =$request->input('email');
      $etudiant->mdp=$request->input('nom') . $request->input('prenom');
      $etudiant->id_groupe=\DB::table('groupes')->where('nom_groupe',$request->input('groupe'))->select('id')->get()->first()->id;
      // dd($etudiant->id_groupe);
      $etudiant->save();

      return 'inscription faite avec succes ';
    }
    else {
      return 'ce etudiant est deja inscrit ';
    }

  }

    public function AfficherAbs()
    {
      $abs= \DB::table('absences')
      ->join('etudiants', 'absences.id_etudiant', '=', 'etudiants.id')
      ->join('seances', 'absences.id_seance', '=', 'seances.id')
      ->join('groupes', 'absences.id_groupe', '=', 'groupes.id')
      ->select('absences.id','etudiants.nom','date','seances.nom_seance','groupes.nom_groupe')
      ->groupBy('absences.id')
      ->get();
      return view ('interfaceAdmin',['abs'=>$abs]);

    }
}
