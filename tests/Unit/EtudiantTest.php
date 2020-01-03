<?php

namespace Tests\Feature;
use App\Etudiant;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

/**
 * @runTestsInSeparateProcesses
 */
class EtudiantTest extends TestCase
{
    use RefreshDatabase;
    use WithoutMiddleware;
    /**
     * A basic test example.
     *
     * @return void
     */

public function data(){
    return[
            'nom'=>'arabi',
            'prenom'=>'assia',
            'matricule'=>'17/14',
            'email'=>'assiaarabiarabi@esi.dz',
            'mdp'=>'arabiassia',
            'id_groupe'=>'3'
        ]; 
}
/** @test */
public function etudiant_ajoute(){//vendor/bin/phpunit --filter etudiant_ajoute
    $response = $this->get('/inscription',$this->data()); 
    $response->assertStatus(200);
}

/** @test */
public function affichage_liste_absences(){
    $i=1;
    $response = $this->get('/Admin');
    $response->assertJsonStructure([
      '*'=>[
        'absences.id','etudiants.matricule','etudiants.nom','etudiants.prenom','date','seances.nom_seance','groupes.nom_groupe'
      ], 
  ]); 
}
}