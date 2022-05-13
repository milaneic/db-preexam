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
        \DB::unprepared("
        DROP PROCEDURE IF EXISTS `update_cards_status`;
        CREATE PROCEDURE `update_cards_status`()
        BEGIN
        UPDATE cards SET status='inactive' WHERE valid_to <= NOW();
        END;
        ");
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
