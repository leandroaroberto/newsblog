<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //Delete data before start seeding        
        DB::table('news')->delete();
        
        
        //Inserting fake data to start testing
        DB::table('news')->insert([
           'title'=>"Mussum Ipsu",
            'email'=>"fake@123.com",
            'name'=> "Fake User",
            'photo'=> "uploads/nopic.jpg",
            'fulltext'=> "Mussum Ipsum, cacilds vidis litro abertis. Detraxit consequat et quo num tendi nada. Leite de capivaris, leite de mula manquis sem cabeça. Paisis, filhis, espiritis santis. Sapien in monti palavris qui num significa nadis i pareci latim.",
            'summary' => "Mussum Ipsum, cacilds vidis litro abertis...",  
            'created_at' => date("Y-m-d h:i:s"),
        ]);
         DB::table('news')->insert([
           'title'=>"Norwegian family arrested for suspected attempted murder of woman",
             'email'=>"fake@123.com",
             'name'=> "Fake User",
            'photo'=> "uploads/1.jpg",
            'fulltext'=> "Six people have been arrested on suspicion of attempted murder after an 18-year-old women suffered serious injuries near Oslo on Tuesday. All six are related to the injured woman and some of them are minors, reports NRK. Police receive reports of a violent incident in the Oppegård municipality at around 7pm on Tuesday.",
            'summary' => "Six people have been arrested on suspicion of attempted murder...",   
             'created_at' => date("Y-m-d h:i:s"),
        ]);
         DB::table('news')->insert([
           'title'=>"Maria takes aim at battered Caribbean, Florida could be next",
             'email'=>"fake@123.com",
             'name'=> "Fake User",
            'photo'=> "uploads/2.jpg",
            'fulltext'=> "Tropical Storm Maria grew stronger Sunday and took aim at already battered islands in the Caribbean amid growing concerns that Florida could become a long-term target.
The National Hurricane Center said Maria was likely to reach hurricane strength sometime Sunday with winds in excess of 74 mph. By afternoon, Maria had maximum sustained winds of 65 mph. The storm was about 400 miles east southeast of the Leeward Islands and more than 600 miles from Puerto Rico and the U.S. Virgin Islands.",
            'summary' => "Tropical Storm Maria grew stronger Sunday...", 
             'created_at' => date("Y-m-d h:i:s"),
        ]);      
        
        
        
    }
}
