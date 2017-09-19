<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use crossover\News;
use crossover\User;

//use Illuminate\Foundation\Testing\DatabaseTransactions;



class HomePageTest extends DuskTestCase
{
    
    /** @test 
    check if the default page loads with no news on database
     *      */
    public function check_if_home_page_loads_with_no_news()
    {     
        $this->seed('deleteNewsSeeder');
        
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Strange');
        });
    }
        
    /** @test
    check if the default seeded news loads
     *      */
    public function check_if_home_page_load_news()
    {       
        
        $this->seed('UserSeeder');
        $this->seed('NewsSeeder');
        
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Norwegian');
        });
    }
    
    /** @test 
     * 
     * Check if when click a news title link, news info open
     */    
    public function check_if_news_info_loads()
    {        
        $this->browse(function (Browser $browser) {
            $news = News::orderBy('created_at', 'desc')
               ->take(10)
               ->get();
            foreach($news as $nx)
            {            
            
                $browser->visit('/')
                        ->clickLink($nx->title)                    
                        ->assertPathIs("/home/$nx->id");
            }
        });        
    }      
    
}
