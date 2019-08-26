<?php

namespace Tests\Browser\Pages;

use Laravel\Dusk\Browser;

class RegisterPage extends Page
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

    public function registerUser(Browser $browser)
    {
        try
            {
                $browser->visit('mercuryregister.php');
                $browser->assertTitle('Register: Mercury Tours');
                $browser->type("input[name='firstName']","Fayaz");
                $browser->type("input[name='phone']","9658745885");
                $browser->type("input[name='userName']","abc@gmail.com");
                $browser->type("input[name='address1']","sadfsfsdaf");
                $browser->type("input[name='address2']","utuyuiyio");
                $browser->type("input[name='city']","Hyderabad");
                $browser->type("input[name='state']","Telangana");
                $browser->type("input[name='postalCode']","500018");
                $browser->select('country', 92);
                $browser->type("input[name='email']","abc@gmail.com");
                $browser->type("input[name='password']","123456");
                $browser->type("input[name='confirmPassword']","123456");
                $browser->click("input[name='register']");
                $browser->pause(60000);
                $browser->assertPathIs("/create_account_success.php");
                $browser->assertSee("Thank you for registering");
                
                return true;
            }
            catch(Exception $e)
            {
                return false;
            }
    }
}
