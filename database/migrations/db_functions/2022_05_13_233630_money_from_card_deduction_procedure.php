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
        \DB::unprepared(
            '
            DROP PROCEDURE IF EXISTS `money_deduction`;
            CREATE PROCEDURE `money_deduction`(IN amount double(4,2))
            BEGIN
            UPDATE cards SET status="inactive" WHERE balance <= amount;
            UPDATE cards SET balance=balance-amount WHERE balance >= amount AND status="active";
            END;
            '
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('card_deduction_procedure', function (Blueprint $table) {
            //
        });
    }
};
