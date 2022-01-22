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
            'cover' => '1.jpg',
            'price' => 20000
        ]);
        Drink::create([
            'name' => 'Matchazilla',
            'cover' => '2.jpg',
            'price' => 20000
        ]);
        Drink::create([
            'name' => 'Blushing Tea',
            'cover' => '3.jpg',
            'price' => 25000
        ]);
        Drink::create([
            'name' => 'Ban Tea',
            'cover' => '4.jpg',
            'price' => 25000
        ]);
        Drink::create([
            'name' => 'Toxic Tea',
            'cover' => '5.jpg',
            'price' => 20000
        ]);
        Drink::create([
            'name' => 'STM',
            'cover' => '6.jpg',
            'price' => 15000
        ]);

    }
}
