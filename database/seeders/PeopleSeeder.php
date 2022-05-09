<?php

namespace Database\Seeders;

use App\Models\People;
use Database\Factories\PeopleFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        People::factory()->count(100)->create();
    }
}