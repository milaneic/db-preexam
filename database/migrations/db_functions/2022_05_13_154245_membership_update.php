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
        CREATE TRIGGER after_membership_update 
        AFTER UPDATE 
        ON memberships FOR EACH ROW
        BEGIN
        IF OLD.begin_date <> NEW.begin_date 
        THEN 
        UPDATE cards SET valid_from=NEW.begin_date WHERE membership_id=OLD.id;
        END IF;
        IF NEW.end_date <> OLD.end_date 
        THEN 
        UPDATE cards SET valid_to=NEW.end_date WHERE membership_id=OLD.id;
        END IF;
        END;');
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
