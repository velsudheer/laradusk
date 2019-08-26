<?php

namespace Tests\Browser\home;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class HomeTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('The Travel Software');
        });
    }
}
