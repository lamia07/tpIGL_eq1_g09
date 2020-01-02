<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etudiant;


class EtudiantController extends Controller
{
  public function create()
  {
    return view ('inscription');
  }
  public function AjouterEtud(Request $request){
    $etud = \DB::table('etudiants')->where('matricule',request('matricule'))->first();
    if (is_null($etud)) {
      $etudiant = new Etudiant();
      $etudiant->nom =$request->input('nom');
      $etudiant->prenom =$request->input('prenom');
      $etudiant->matricule =$request->input('matricule');
      $etudiant->email =$request->input('email');
      $etudiant->mdp=$request->input('nom') . $request->input('prenom');
      $etudiant->id_groupe=\DB::table('groupes')->where('nom_groupe',$request->input('nom_groupe'))->select('id')->get()->first()->id;
      $etudiant->save();

      // return response()->json(['etat' => true],'id' => $etudiant->id);
    }
    else {
      return 'ce etudiant est deja inscrit ';
    }

  }


}
