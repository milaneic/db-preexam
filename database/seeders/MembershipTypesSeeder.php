<?php

namespace Database\Seeders;

use App\Models\MembershipTypes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MembershipTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        MembershipTypes::factory()->count(2)->create();
    }
}
