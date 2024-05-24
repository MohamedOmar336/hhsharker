<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_history', function (Blueprint $table) {
            $table->id('HistoryID');
            $table->foreignId('TicketID')->constrained('tickets')->onDelete('cascade');
            $table->foreignId('ChangedBy')->constrained('users')->onDelete('cascade'); // assuming 'users' table exists
            $table->text('ChangeDescription')->nullable();
            $table->timestamp('ChangedAt')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ticket_history');
    }
}
