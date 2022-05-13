<?php

namespace Database\Seeders;

use App\Models\Card;
use App\Models\CheckIn;
use App\Models\Membership;
use Database\Factories\MembershipFactory;
use DateTime;
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
        Membership::factory()->count(100)->create()->each(function ($m) {
            $status = rand(0, 1) === 1 ? 'active' : 'inactive';
            $card = Card::create([
                'membership_id' => $m->id,
                'valid_from' => $m->begin_date,
                'valid_to' => $m->end_date,
                'balance' => rand(1, 100),
                'status' => $status
            ]);
            $options = ["-1 hour", "-30 minutes", "now", "-2 hours", "-40 minutes", "-110 minutes", "-64 minutes", "-48 minutes", "-128 minutes"];

            for ($i = 0; $i < rand(1, 3); $i++) {
                CheckIn::create([
                    'card_id' => $card->id,
                    'timestamp' => date('Y-m-d H:i:s', strtotime($options[rand(0, count($options) - 1)])),
                ]);
            }
        });
    }
}
