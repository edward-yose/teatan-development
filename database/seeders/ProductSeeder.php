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
        // $faker = Faker::create('id_ID');
        \DB::table('product')->insert([
            'name' => "UltimaThai tea",
            'price' => 20000,
            'description' => "This refreshing thai tea will make you miss the times when thai tea was booming in Indonesia.",
            'photo' => 'ThaiTea.png',
            'availableStatus'=>true
        ]);

        \DB::table('product')->insert([
            'name' => "Matchazilla",
            'price' => 20000,
            'description' => "Perfect for getting rid of the wear and tear caused by eating fried food but not buying a drink 
            ",
            'photo' => 'matcha.png',
            'availableStatus'=>true
        ]);
        \DB::table('product')->insert([
            'name' => "Blushing tea",
            'price' => 25000,
            'description' => "An extraordinary mix between strawberry and tea! grab it fast!",
            'photo' => 'blushing.png',
            'availableStatus'=>true
        ]);
        \DB::table('product')->insert([
            'name' => "BanTea",
            'price' => 20000,
            'description' => "Have you ever ponder what can we made from banana and a tea? well here it is! BanTea, our sacred special menu. grab it fast and quench your thirst with this deliciously BanTea!",
            'photo' => 'BanTea.png',
            'availableStatus'=>true
        ]);
        \DB::table('product')->insert([
            'name' => "Toxic Tea",
            'price' => 20000,
            'description' => "Not only your relationship that can be toxic, our tea may be toxically sweet. a mix between grape and tea! grab it fast and enjoy our toxic!",
            'photo' => 'Toxic.png',
            'availableStatus'=>true
        ]);
        \DB::table('product')->insert([
            'name' => "STM",
            'price' => 15000,
            'description' => "You doesn't like sweets, You doesn't like bitter, you doesn't like hot, all you want is a classic regular tea and a product of TeaTan. Them, STM is the exact solution for your needs! a classic regular iced tea without any sweets or anything. just plain ol' tea with ice.",
            'photo' => 'STM.png',
            'availableStatus'=>true
        ]);
    }
}
