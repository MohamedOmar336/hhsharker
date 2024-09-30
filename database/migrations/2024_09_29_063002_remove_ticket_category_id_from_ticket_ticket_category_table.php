<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ticket_ticket_category', function (Blueprint $table) {
            // Drop the 'ticket_category_id' column
            $table->dropForeign(['ticket_category_id']); // Drop the foreign key constraint
            $table->dropColumn('ticket_category_id');     // Drop the actual column
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ticket_ticket_category', function (Blueprint $table) {
            // Optionally, re-add the 'ticket_category_id' column
            $table->foreignId('ticket_category_id')->constrained()->onDelete('cascade');
        });
    }
};
