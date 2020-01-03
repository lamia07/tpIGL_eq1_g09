
   public function AjouterEtud(Request $request){
     $etud = \DB::table('etudiants')->where('matricule',request('matricule'))->first();
     if (is_null($etud)) {//etudiant n'existe pas
      ......
       $etudiant->save();

         return response()->json(['etat' => true],'id' => $etudiant->id);
      }
      else {
        ce etudiant est deja inscrit
      }

    }
