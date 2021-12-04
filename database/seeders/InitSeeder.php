<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Directory;
use SebastianBergmann\CodeCoverage\Report\Xml\Totals;

class InitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        // 05 row client
        // 10 row cart
        // 10-20 row cartDetail
        // 15 row drink
    
        for($i=1; $i<=5; $i++){
            DB::table('client')->insert([
                'email' => 'client'.$i.'@gmail.com',
                'password' => $faker->password,
                'fullName' => $faker->name,
                'phoneNumber' => '+628'.$faker->numberBetween(12,88).$faker->numberBetween(0,9).$faker->numberBetween(0,9).$faker->numberBetween(0,9).$faker->numberBetween(0,9).$faker->numberBetween(0,9).$faker->numberBetween(0,9).$faker->numberBetween(0,9).$faker->numberBetween(0,9)
            ]);
        }

        for($i=1; $i<=10; $i++){
            DB::table('cart')->insert([
                'id' => $i,
                'email' => 'client'.$i.'@gmail.com',
                'total' => $faker->numberBetween(0,10)*5000
            ]);
        }

        //untested, chances 2.25% duplicated
        for($i=1; $i<=10; ){
            DB::table('cartDetail')->insert([
                'cartid' => $i,
                'productid' => $faker->numberBetween(1,15),
                'quantity' => $faker->numberBetween(1,10),
                'note' => $faker->realText()
            ]);
            if($faker->numberBetween(0,1) == 1){
                $i++;
            }
        }

        //seeder drink
        // DB::table('drink')->insert([
        //     'id' => 1,
        //     'name' => 'mochacinnoTea',
        //     'price' => $faker->numberBetween(10,25)*1000,
        //     'description' =>'null'
        // ]);
        // DB::table('drink')->insert([
        //     'id' => 2,
        //     'name' => 'mochacinnoTea'
        // ]);

    }
}
