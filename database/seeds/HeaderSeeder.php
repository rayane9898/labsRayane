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
            'logo' => "img/big-logo.png",
            'img' => 'img/01.jpg',
            'img2' => 'img/02.jpg',
            'paragraphe' => "Get your freebie template now!",
        ]);
    }
}
