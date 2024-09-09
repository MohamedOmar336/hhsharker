<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAssignedToToTicketHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ticket_history', function (Blueprint $table) {
            $table->foreignId('AssignedTo')->nullable()->constrained('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ticket_history', function (Blueprint $table) {
            $table->dropForeign(['AssignedTo']); // Drops the foreign key constraint
            $table->dropColumn('AssignedTo'); // Removes the column
        });
    }
}

