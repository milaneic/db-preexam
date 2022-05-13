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
        DROP PROCEDURE IF EXISTS `update_memberships_status`;
        CREATE PROCEDURE `update_memberships_status`()
        BEGIN
        UPDATE memberships SET status='inactive' WHERE end_date <= NOW();
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
