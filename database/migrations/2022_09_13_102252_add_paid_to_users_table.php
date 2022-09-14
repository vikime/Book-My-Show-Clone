<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPaidToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('seat_ticket_booking', function (Blueprint $table) {
            //
            $table->string('seat_booked', 255)->after('movie');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('seat_ticket_booking', function (Blueprint $table) {
            //
            $table->string('seat_booked', 255)->after('movie');
        });
    }
}
