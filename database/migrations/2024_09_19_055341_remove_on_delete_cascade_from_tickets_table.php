<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveOnDeleteCascadeFromTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tickets', function (Blueprint $table) {
            // Remove the foreign key constraints with 'onDelete cascade'
            $table->dropForeign(['PriorityID']);
            $table->dropForeign(['StatusID']);

            // Re-add the foreign keys without 'onDelete cascade'
            $table->foreign('PriorityID')->references('id')->on('ticket_priority_settings');
            $table->foreign('StatusID')->references('id')->on('ticket_status_settings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tickets', function (Blueprint $table) {
            // Drop the current foreign keys
            $table->dropForeign(['PriorityID']);
            $table->dropForeign(['StatusID']);

            // Re-add foreign keys with 'onDelete cascade'
            $table->foreign('PriorityID')->references('id')->on('ticket_priority_settings')->onDelete('cascade');
            $table->foreign('StatusID')->references('id')->on('ticket_status_settings')->onDelete('cascade');
        });
    }
}
