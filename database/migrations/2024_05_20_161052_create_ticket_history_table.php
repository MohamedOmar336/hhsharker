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
            $table->id(); // Ensures the 'id' column is the primary key
            $table->foreignId('TicketID')->constrained('tickets')->onDelete('cascade');
            $table->foreignId('ChangedBy')->constrained('users')->onDelete('cascade'); // assuming 'users' table exists
            $table->text('ChangeDescription')->nullable();
            $table->foreignId('AssignedTo')->constrained('users')->onDelete('cascade');
            $table->date('ChangedAt')->nullable();
            $table->timestamps();
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
