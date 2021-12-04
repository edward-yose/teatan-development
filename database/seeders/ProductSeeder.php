<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        \DB::table('product')->insert([
            'name' => "UltimaThai tea",
            'price' => 20000,
            'description' => $faker->text,
            'photo' => '1.jpg',
            'availableStatus'=>true
        ]);

        \DB::table('product')->insert([
            'name' => "Matchazilla",
            'price' => 20000,
            'description' => $faker->text,
            'photo' => '2.jpg',
            'availableStatus'=>true
        ]);
        \DB::table('product')->insert([
            'name' => "Blushing tea",
            'price' => 25000,
            'description' => $faker->text,
            'photo' => '3.jpg',
            'availableStatus'=>true
        ]);
        \DB::table('product')->insert([
            'name' => "BanTea",
            'price' => 20000,
            'description' => $faker->text,
            'photo' => '4.jpg',
            'availableStatus'=>true
        ]);
        \DB::table('product')->insert([
            'name' => "Toxic Tea",
            'price' => 20000,
            'description' => $faker->text,
            'photo' => '5.jpg',
            'availableStatus'=>true
        ]);
        \DB::table('product')->insert([
            'name' => "STM",
            'price' => 15000,
            'description' => $faker->text,
            'photo' => '6.jpg',
            'availableStatus'=>true
        ]);
    }
}
