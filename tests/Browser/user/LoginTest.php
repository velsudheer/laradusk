<?php

namespace Tests\Browser\user;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

use Tests\Browser\Pages\LoginPage;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group login
     * @return void
     */
    public function testLogin()
    {
        $this->browse(function (Browser $browser) {
            $lp = new LoginPage();
            $result = $lp->authUser($browser);
            $this->assertEquals(true, $result);
        });
        
    }
}
