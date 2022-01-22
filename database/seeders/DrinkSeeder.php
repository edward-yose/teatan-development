<?php

namespace Database\Seeders;
use App\Models\Drink;

use Illuminate\Database\Seeder;

class DrinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Drink::create([
            'name' => 'UltimaThai Tea',
            'cover' => 'ThaiTea.png',
            'price' => 20000
        ]);
        Drink::create([
            'name' => 'Matchazilla',
            'cover' => 'matcha.png',
            'price' => 20000
        ]);
        Drink::create([
            'name' => 'Blushing Tea',
            'cover' => 'blushing.png',
            'price' => 25000
        ]);
        Drink::create([
            'name' => 'Ban Tea',
            'cover' => 'BanTea.png',
            'price' => 25000
        ]);
        Drink::create([
            'name' => 'Toxic Tea',
            'cover' => 'Toxic.png',
            'price' => 20000
        ]);
        Drink::create([
            'name' => 'STM',
            'cover' => 'STM.png',
            'price' => 15000
        ]);

    }
}
