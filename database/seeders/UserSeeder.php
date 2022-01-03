<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i=1; $i<=5; $i++){
            \DB::table('users')->insert([
                'email' => 'client'.$i.'@gmail.com',
                'password' => bcrypt('client123'),
                'fullName' => $faker->name,
                'phoneNumber' => '+628'.$faker->numberBetween(111111111,9999999)
            ]);
        }
    }
}
