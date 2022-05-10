<?php

namespace Database\Seeders;

use App\Models\PeopleType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeopleTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        PeopleType::factory()->count(2)->create();
    }
}
