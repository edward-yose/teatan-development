<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CartDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        
            \DB::table('cartDetail')->insert([
                'cartId'=>1,
                'productId'=>1,
                'quantity'=>$faker->numberBetween(1,5),
                'note'=> $faker->text
            ]);
            \DB::table('cartDetail')->insert([
                'cartId'=>2,
                'productId'=>3,
                'quantity'=>$faker->numberBetween(1,5),
                'note'=> $faker->text
            ]);
            \DB::table('cartDetail')->insert([
                'cartId'=>3,
                'productId'=>4,
                'quantity'=>$faker->numberBetween(1,5),
                'note'=> $faker->text
            ]);
            \DB::table('cartDetail')->insert([
                'cartId'=>4,
                'productId'=>2,
                'quantity'=>$faker->numberBetween(1,5),
                'note'=> $faker->text
            ]);
            \DB::table('cartDetail')->insert([
                'cartId'=>5,
                'productId'=>6,
                'quantity'=>$faker->numberBetween(1,5),
                'note'=> $faker->text
            ]);
    }
}
