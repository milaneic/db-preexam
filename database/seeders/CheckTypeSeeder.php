<?php

namespace Database\Seeders;

use App\Models\CheckType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CheckTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        CheckType::factory()->count(2)->create();
    }
}
