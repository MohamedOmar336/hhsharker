<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class ModifyNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Truncate the notifications table.
        // Be cautious with this as it will permanently remove all existing records.
        DB::table('notifications')->truncate();

        Schema::table('notifications', function (Blueprint $table) {
            // Drop the morphs column for polymorphic relations if it exists
            // Ensure to check if they exist first in a real application.
            $table->dropMorphs('notifiable'); // This will drop 'notifiable_id' and 'notifiable_type'
        });

        // If you need to add new columns or adjust existing ones, do so here
        // Example:
        // $table->unsignedBigInteger('user_id')->nullable();
        // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('notifications', function (Blueprint $table) {
            // Recreate the polymorphic relationship if needed
            $table->morphs('notifiable'); // Recreate 'notifiable_id' and 'notifiable_type' if necessary

            // If you added any new columns, you should drop them here
            // Example:
            // $table->dropForeign(['user_id']);
            // $table->dropColumn('user_id');
        });
    }
}
