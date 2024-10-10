<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropAssignedToFromTicketsTable extends Migration
{
    public function up()
    {
        Schema::table('tickets', function (Blueprint $table) {
            // Drop the AssignedTo column
            $table->dropForeign(['AssignedTo']); // Drop foreign key constraint if exists
            $table->dropColumn('AssignedTo'); // Drop the column
        });
    }

    public function down()
    {
        Schema::table('tickets', function (Blueprint $table) {
            // You might want to recreate the column in the down method
            $table->foreignId('AssignedTo')->constrained('users')->onDelete('cascade'); // Add it back with constraints
        });
    }
}
