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
        $checkout_procedure = "DROP PROCEDURE IF EXISTS `checkout_user_card`;
        CREATE PROCEDURE `checkout_user_card` (IN idx int)
        BEGIN
        UPDATE check_ins SET timestamp_out=CURRENT_TIMESTAMP(),time_spent=timestampdiff(SECOND,timestamp,timestamp_out) WHERE id = idx;
        END;";
        \DB::unprepared($checkout_procedure);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store_procedure_checkins');
    }
};
