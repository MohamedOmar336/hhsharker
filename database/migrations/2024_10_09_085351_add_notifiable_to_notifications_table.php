<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNotifiableToNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('notifications', function (Blueprint $table) {
            // Add polymorphic fields for notifications
            $table->morphs('notifiable'); // Adds notifiable_id and notifiable_type

            // Then, we can add the foreign key constraint
            $table->foreign('notifiable_id')->references('id')->on('users')->onDelete('cascade');

            // Add polymorphic fields if needed (notifiable_type will be added here)
          //  $table->string('notifiable_type')->after('notifiable_id'); // Add notifiable_type if not already present
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('notifications', function (Blueprint $table) {
            // Drop the foreign key constraint
            $table->dropForeign(['notifiable_id']);

            // Drop the notifiable_id column
            $table->dropColumn('notifiable_id');
            $table->dropColumn('notifiable_type'); // Drop notifiable_type if needed
        });
    }
}