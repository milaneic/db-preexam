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
        CREATE TRIGGER before_cards_delete 
        BEFORE DELETE
        ON cards FOR EACH ROW
        BEGIN
        DELETE FROM check_ins WHERE card_id=OLD.id;
        END');
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
