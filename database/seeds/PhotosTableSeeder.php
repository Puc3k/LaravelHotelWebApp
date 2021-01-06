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
                'path'=> $faker->imageUrl(800,400,'city'),
                'photoable_id'=> $faker->numberBetween(1,10),
                'photoable_type'=>'App\Object',
            ]);
            }
            for($i=1;$i<=200;$i++){
                DB::table('photos')->insert([
                    'path'=> $faker->imageUrl(800,400,'nightlife'),
                    'photoable_id'=> $faker->numberBetween(1,10),
                    'photoable_type'=>'App\Room',
                ]);
                }
                for($i=1;$i<=10;$i++){
                    DB::table('photos')->insert([
                        'path'=> $faker->imageUrl(275,150,'people'),
                        'photoable_id'=> $faker->numberBetween(1,10),
                        'photoable_type'=>'App\User',
                    ]);
                    }
    

    }
}
