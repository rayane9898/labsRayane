<?php

use Illuminate\Database\Seeder;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('headers')->insert([
            'logo' => "big-logo.png",
            'img' => '01.jpg',
            'img2' => '02.jpg',
            'paragraphe' => "Get your freebie template now!",
        ]);
    }
}
