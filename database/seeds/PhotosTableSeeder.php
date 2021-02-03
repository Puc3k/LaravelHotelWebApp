<?php

use Illuminate\Database\Seeder;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker\Factory::create('pl_PL');
        for($i=1;$i<=100;$i++){
            DB::table('photos')->insert([
                'path'=>'images\city_'.$faker->numberBetween(1,10).'.jpg',
                'photoable_id'=> $faker->numberBetween(1,10),
                'photoable_type'=>'App\TouristObject',
            ]);
            }
            for($i=1;$i<=200;$i++){
                DB::table('photos')->insert([
                    'path'=>'images\room_'.$faker->numberBetween(1,10).'.jpg',
                    'photoable_id'=> $faker->numberBetween(1,10),
                    'photoable_type'=>'App\Room',
                ]);
                }
                for($i=1;$i<=10;$i++){
                    DB::table('photos')->insert([
                        'path'=>'images\avatar_'.$faker->numberBetween(1,6).'.jpg',
                        'photoable_id'=> $faker->unique()->numberBetween(1,10),
                        'photoable_type'=>'App\User',
                    ]);
                    }
    

    }
}
