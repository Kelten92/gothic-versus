<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ExpeditionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $types = array('exploration', 'delivery', 'escort', 'hunting', 'riddle', 'theft',
         'investigation', 'trading', 'guard');
        $lvls = array('easy', 'medium' , 'hard');
        foreach (range(1,30) as $index) {
            $random_lvls = rand(0,2);
            $random_types = rand(0,8);
        DB::table('expeditions')->insert([
            'name' => $faker->catchPhrase,
            'descryption' => $faker->text,
            'difficult_lvl' => $lvls[$random_lvls],
            'type' => $types[$random_types],
            'reward_mod' => 1,
            'experience_mod' => 1,
        ]);
      }
    }
}
