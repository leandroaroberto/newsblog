<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class DashBoardTest extends DuskTestCase
{
    
    /** @test
     * 
     * Check the creation of news
     * 
     */
    public function dashboard_create_news(){
        
        $this->browse(function ($dash) {
        $dash->loginAs('fake@123.com')
              ->visit('/home')
              ->clickLink('Add new')
              ->assertSee('Write a new News');
        
        
        /*$b->loginAs(User::find(2))
               ->visit('/home')
               ->waitForText('Message')
               ->type('message', 'Hey Taylor')
               ->press('Send');

        $c->waitForText('Hey Taylor')
              ->assertSee('Jeffrey Way');*/
        });        
        
    }
    
    
}
