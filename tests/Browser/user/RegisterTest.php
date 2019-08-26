<?php

namespace Tests\Browser\user;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

use Tests\Browser\Pages\RegisterPage;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test Registration.
     * @group register
     * @return void
     */
    public function testRegistration()
    {
        $this->browse(function (Browser $browser) {
            $rp = new RegisterPage();
            $result = $rp->registerUser($browser);
            $this->assertEquals(true, $result);
        });
    }

    
}
