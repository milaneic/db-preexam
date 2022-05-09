<?php

namespace Database\Seeders;

use App\Models\MembershipTypes;
use App\Models\People;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call([
            PeopleSeeder::class,
            MembershipTypesSeeder::class,
            MembershipSeeder::class,
            CardSeeder::class,
            CheckTypeSeeder::class,
            CheckInSeeder::class,
        ]);
    }
}
