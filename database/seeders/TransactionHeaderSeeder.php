<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class TransactionHeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i=1;$i<=10;$i++)
        {
            \DB::table('transactionHeader')->insert([
                'paymentId'=> $i,
                'address'=>$faker->address,
                'transactionDate'=>$faker->dateTime(),
                'total'=>$faker->numberBetween(11111,9999)
            ]);
        }
        
    }
}
