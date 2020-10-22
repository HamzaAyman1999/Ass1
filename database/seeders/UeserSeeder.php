<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UeserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //  $users = factory(App\User::class, 3)->create();
        //return $users;

        $office = Office::factory()->count(3)->create();
        return $office;
    }

}
