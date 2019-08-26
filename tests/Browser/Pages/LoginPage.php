<?php

namespace Tests\Browser\Pages;

use Laravel\Dusk\Browser;

class LoginPage extends Page
{
    /**
     * Get the URL for the page.
     *
     * @return string
     */
    public function url()
    {
        return '/';
    }

    /**
     * Assert that the browser is on the page.
     *
     * @param  Browser  $browser
     * @return void
     */
    public function assert(Browser $browser)
    {
        $browser->assertPathIs($this->url());
    }

    /**
     * Get the element shortcuts for the page.
     *
     * @return array
     */
    public function elements()
    {
        return [
            '@element' => '#selector',
        ];
    }

    /**
     * Authenticating a user.
     *
     * @param  \Laravel\Dusk\Browser  $browser
     * @return void
     */

    public function authUser(Browser $browser)
    {
            try
            {
                $browser->visit('mercurysignon.php');
                $browser->assertTitle('Sign-on: Mercury Tours');
                $browser->type("userName","abc@gmail.com");
                $browser->type("password","123456");
                $browser->click("input[name='login']");
                $browser->assertPathIs("/mercuryreservation.php");
                $browser->assertSee("SIGN-OFF");
                
                return true;
            }
            catch(Exception $e)
            {
                return false;
            }
    }


}
