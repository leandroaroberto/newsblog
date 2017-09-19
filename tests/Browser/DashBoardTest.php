<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class DashBoardTest extends DuskTestCase
{
    
    /** @test
     * 
     * Check the creation of news;
     * Check the summary auto generation;
     * Remove the news created
     * Test dialog box: NO and YES options
     * 
     */
    public function dashboard_create_news(){
        
        $this->browse(function ($dash) {
        $dash->loginAs('fake@123.com')
              ->visit('/home')
              ->clickLink('Add new')
              ->assertSee('Write a new News');
        $dash->visit('/home/add')
                ->type('title','Test News Dusk X')
                ->type('text','Per aumento de cachacis, eu reclamis. Suco de cevadiss deixa as pessoas mais interessantis. Quem num gosta di mé, boa gentis num é. Não sou faixa preta cumpadi, sou preto inteiris, inteiris.')
                ->press('Send')
                ->assertSee('Article has been created successfully!')
                ->pause(3000)
                ->clickLink('Back')
                ->assertSee('Test News Dusk X')
                ->assertSee('Per aumento de cachacis, eu reclamis. Suco de cevadiss deixa as pessoas mais interessantis. Quem num gosta...')
                ->pause(3000);
        
        $dash->visit('/home')
                ->clickLink('Test News Dusk X')
                ->assertSee(' sou faixa preta cumpadi')
                ->press('Remove this post')
                ->assertSee('You are about to delete this item, are you sure?')
                ->press('No')
                ->assertPathIs('/home')
                ->clickLink('Test News Dusk X')
                ->press('Remove this post')
                ->press('Yes')
                ->assertDontSee('Test News Dusk X')
                ->pause(3000);        
        });        
        
    }
    
     /** @test
     * 
     * Check if it is possible to create a blank article
     * 
     */
    public function dashboard_create_blank_news(){
        
        $this->browse(function ($dash) {
        $dash->loginAs('fake@123.com')
              ->visit('/home/add')                              
                ->press('Send')
                ->assertDontSee('Article has been created successfully!')
                ->pause(3000); 
        });
    }
    
    
    
}
