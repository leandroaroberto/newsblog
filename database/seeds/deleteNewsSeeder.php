<?php

use Illuminate\Database\Seeder;

class deleteNewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('news')->delete();
    }
}
