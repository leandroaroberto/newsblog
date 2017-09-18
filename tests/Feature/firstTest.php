<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class firstTest extends TestCase
{
    
    //use DatabaseMigrations;
    /** @test */
   public function see_all_posts(){
       
       $response = $this->get('/');
       $response->assertStatus(200);
       
   }
    
}
