<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i=1;$i<=10;$i++)
        {
            \DB::table('payment')->insert([
                'paymentProcess'=>true,
                'QRISTransactionID'=>$faker->uuid
            ]);
        }
        
        
    }
}
