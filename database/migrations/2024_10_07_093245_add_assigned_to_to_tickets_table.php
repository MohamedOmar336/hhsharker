<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAssignedToToTicketsTable extends Migration
{
    public function up()
    {
        Schema::table('tickets', function (Blueprint $table) {
            // Add the AssignedTo column and set it as nullable
            $table->foreignId('AssignedTo')->nullable()->constrained('users')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::table('tickets', function (Blueprint $table) {
            // Remove the AssignedTo column if rolling back
            $table->dropForeign(['AssignedTo']); // Drop foreign key constraint
            $table->dropColumn('AssignedTo'); // Drop the column
        });
    }
}
