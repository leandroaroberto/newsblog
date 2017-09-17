<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class firstTest extends TestCase
{
    
    use DatabaseMigrations;
    /** @test */
   public function see_all_posts(){
       
       $posts = factory(\crossover\News::class,10);
       $response = $this->get(action('newsController@index'));
       
       $response->assertStatus(200);
       
       foreach($posts as $post)
       {
           $response->assertSee($post->title);
       }
   }
    
}
