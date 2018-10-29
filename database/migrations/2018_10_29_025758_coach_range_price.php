<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CoachRangePrice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

         \DB::statement("
            CREATE VIEW view_coach_range_prices 
            AS
            SELECT
               c.coach_id as coach_id, max(c.price) as max_price, min(c.price) as min_price
            FROM
                users as u
                LEFT JOIN coach_prices as c ON c.coach_id = u.id 
                WHERE u.active_status = 1 AND u.role = 2 GROUP BY coach_id      
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
        \DB::statement("DROP VIEW view_coach_range_prices");
    }
}
