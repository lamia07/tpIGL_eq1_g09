<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
  public function create()
  {
    return view('/inscription');
  }
  public function recherche(){
$etudiant = Etudiant::where('matricule',request('matricule'))->first();
if (is_null($etudiant)) {
$Etudiant = new Etudiant;
$Etudiant->email = request('email');
$Etudiant->nom = request('nom');
$Etudiant->prenom = request('prenom');
$Etudiant->id_groupe = request('id_groupe');
$Etudiant->matricule = request('matricule');
$Etudiant->save();
return 'inscription faite avec succes ';

}
  return 'ce etudiant est deja inscrit ';

}

}
