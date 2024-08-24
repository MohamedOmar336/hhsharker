<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusColumnsToMailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mails', function (Blueprint $table) {
            $table->boolean('is_read')->default(false)->after('received_at');
            $table->boolean('is_important')->default(false)->after('is_read');
            $table->boolean('is_draft')->default(false)->after('is_important');
            $table->boolean('is_trash')->default(false)->after('is_draft');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mails', function (Blueprint $table) {
            $table->dropColumn(['is_read', 'is_important', 'is_draft', 'is_trash']);
        });
    }
}
