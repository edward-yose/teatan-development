<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TransactionDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i=1;$i<=6;$i++)
        {
            \DB::table('transactionDetail')->insert([
                'productid'=>$i,
                'quantity'=>$faker->numberBetween(1,5),
                'totalPrice'=>$faker->numberBetween(111111,99999),
                'note'=> $faker->text
            ]);
        }
    }
}
