<?php

namespace Database\Seeders;

use App\Models\Card;
use App\Models\CheckIn;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Card::factory()->count(100)->create()->each(function ($c) {
            $c->check_ins()->saveMany(
                CheckIn::factory()->count(random_int(1, 3))->create()
            );
        });
    }
}
