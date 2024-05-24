<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id('TicketID');
            $table->string('Title')->notNull();
            $table->text('Description')->nullable();
            $table->foreignId('PriorityID')->constrained('ticket_priority_settings')->onDelete('cascade');
            $table->foreignId('StatusID')->constrained('ticket_status_settings')->onDelete('cascade');
            $table->foreignId('AssignedTo')->constrained('users')->onDelete('cascade'); // assuming 'users' table exists
            $table->foreignId('CreatedBy')->constrained('users')->onDelete('cascade'); // assuming 'users' table exists
            $table->timestamps(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
