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
            UserSeeder::class,
            PaymentSeeder::class,
            ProductSeeder::class,
            TransactionHeaderSeeder::class,
            CartSeeder::class,
            TransactionDetailSeeder::class,
            CartDetailSeeder::class
        ]);
    }
}
