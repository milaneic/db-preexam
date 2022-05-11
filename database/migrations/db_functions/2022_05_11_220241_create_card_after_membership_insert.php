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
        CREATE TRIGGER after_membership_insert 
        AFTER INSERT 
        ON memberships FOR EACH ROW
        BEGIN 
        INSERT INTO cards (membership_id,balance,status,created_at,updated_at)
        VALUES (NEW.id,0,"active",NOW(),NOW());
        END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('card_after_membership_insert');
    }
};
