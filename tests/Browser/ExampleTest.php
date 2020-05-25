<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

/**
 * @runTestsInSeparateProcesses
 */
class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
      $this->browse(function (Browser $browser) {
        //  $browser->visit('/Admin')
        $browser->visit('http://localhost:8080/')
        ->waitForText('E-mail')

    ->type('input-10','hr_kessi@esi.dz')
      ->type('input-10-1','66666666666')
->press('VALIDER')
->waitForText('GeSco')
 // ->press('lien')
          ->assertSee('GeSco')
          ->pause(1000);
      });
    }
}
