<?php

namespace Database\Seeders;

use App\Models\MembershipTypes;
use App\Models\People;
use App\Models\PeopleType;
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
            PeopleTypeSeeder::class,
            PeopleSeeder::class,
            MembershipTypesSeeder::class,
            MembershipSeeder::class,
            CardSeeder::class,
            CheckTypeSeeder::class,
            CheckInSeeder::class,
        ]);
    }
}
