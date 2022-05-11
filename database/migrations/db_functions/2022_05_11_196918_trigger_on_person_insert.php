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
        CREATE TRIGGER after_person_insert 
        AFTER INSERT 
        ON people FOR EACH ROW
        BEGIN
        IF NEW.people_type=1 THEN 
        INSERT INTO memberships (people_id,membership_type,start_date,end_date,status,created_at,updated_at)
        VALUES (NEW.id,1,NOW(),DATE_ADD(NOW(),INTERVAL 1 year),"active",NOW(),NOW());
        END IF;
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
