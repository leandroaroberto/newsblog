<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends DuskTestCase
{
    
    /** @test
     * 
     * Test if the user login
     */
    
    public function check_login(){
     
        $this->browse(function (Browser $browser) {
                $browser->visit('/home')
                        ->type('email', 'fake@123.com')
                        ->type('password', '123456')
                        ->press('Login')
                        ->assertPathIs('/home');
            });
    }
    
    
    
    
}
