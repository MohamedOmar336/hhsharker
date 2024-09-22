<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTicketIdToTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('tickets', 'TicketID')) {
            Schema::table('tickets', function (Blueprint $table) {
                $table->string('TicketID')->after('id');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('tickets', 'TicketID')) {
            Schema::table('tickets', function (Blueprint $table) {
                $table->dropColumn('TicketID');
            });
        }
    }
}
