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
        // \App\Models\User::factory(10)->create();
        $this->call(officeSeeder::class);
        $this->call(order_praductSeeder::class);
        $this->call(orderSeeder::class);
        $this->call(employeeSeeder::class);
        $this->call(customerSeeder::class);
        $this->call(paymentSeeder::class);
        $this->call(produtlineSeeder::class);
        $this->call(produtSeeder::class);

    }
}
