<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
            \DB::table('cart')->insert([
                'email' => 'client1'.'@gmail.com',
                'total' => $faker->numberBetween(11111,9999),
                'productId'=>4,
                'quantity'=>$faker->numberBetween(1,5),
                'note'=> $faker->text
            ]);
            \DB::table('cart')->insert([
                'email' => 'client1'.'@gmail.com',
                'total' => $faker->numberBetween(11111,9999),
                'productId'=>2,
                'quantity'=>$faker->numberBetween(1,5),
                'note'=> $faker->text
            ]);
            \DB::table('cart')->insert([
                'email' => 'client1'.'@gmail.com',
                'total' => $faker->numberBetween(11111,9999),
                'productId'=>3,
                'quantity'=>$faker->numberBetween(1,5),
                'note'=> $faker->text
            ]);
    }
}
