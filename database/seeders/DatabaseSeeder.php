<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            /*Seeder jangan lupa ditambahkan */
            ProductSeeder::class,
            UserSeeder::class,
            PaymentSeeder::class
        ]);
    }
}
