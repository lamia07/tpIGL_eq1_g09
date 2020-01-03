<?php

namespace Tests\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
/**
 * @runTestsInSeparateProcesses
 */
class Affichage extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testaffichage()
    //on ouvre 2 terminal un pour php artisan serve et l autre pour php artisan dusk
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/Admin')
            ->assertSee('Affichagedelalisteadmin')
            ->pause(1000);
        });
    }
}
