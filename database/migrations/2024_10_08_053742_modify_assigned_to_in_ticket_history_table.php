<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class ModifyAssignedToInTicketHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Use raw SQL to modify the column to be nullable
        DB::statement('ALTER TABLE ticket_history MODIFY AssignedTo BIGINT UNSIGNED NULL');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Use raw SQL to revert the column to NOT NULL
        DB::statement('ALTER TABLE ticket_history MODIFY AssignedTo BIGINT UNSIGNED NOT NULL');
    }
}
