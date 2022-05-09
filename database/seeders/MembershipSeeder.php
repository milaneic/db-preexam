<?php

namespace Database\Seeders;

use App\Models\Membership;
use Database\Factories\MembershipFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MembershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Membership::factory()->count(100)->create();
    }
}
