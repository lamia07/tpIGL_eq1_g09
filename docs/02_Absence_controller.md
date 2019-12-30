
 File located at : `app/Http/Controllers/AbsenceController.php`

 * Extends Controller.
 * Contient la fonctionalité afficher .
 * Utilise le modèle Absence.

  ``` php
   class AbsenceController extends Controller {

   }
  ```
  ## Methods
  _ _ AfficherAbs()

  ```php
  public function AfficherAbs()
  {
    //select l'id d'absence, matricule, nom, groupe de l'etudiant absent ainsi que la seance.
    return $abs;
  }
  ```
