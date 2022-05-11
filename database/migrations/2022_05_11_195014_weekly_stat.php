<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \DB::unprepared('
        DROP VIEW IF EXISTS weekly_stat;
        CREATE VIEW weekly_stat AS (
            SELECT p.id as person_id,p.first_name as first_name,
            p.last_name as last_name,c.id as card_id,
            SUM(ck.time_spent) as time_spent
            
            FROM people p
            
            LEFT JOIN memberships m ON m.people_id=p.id 
            LEFT JOIN cards c ON  c.membership_id=m.id
            LEFT JOIN check_ins ck ON ck.card_id=c.id
            WHERE ck.time_spent IS NOT NULL AND ck.timestamp >= TIMESTAMP(DATE_SUB(NOW(),INTERVAL 7 day))
            GROUP BY person_id,card_id
        )
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
