<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTypeToWhatsAppMessagesTable extends Migration
{
    public function up()
    {
        Schema::table('whatsapp_messages', function (Blueprint $table) {
            // Add a new column for message type with a default value of 'text'
            $table->enum('type', ['text', 'document', 'image', 'video', 'audio'])
                  ->default('text')
                  ->after('message'); // Adjust the position as needed
        });
    }

    public function down()
    {
        Schema::table('whatsapp_messages', function (Blueprint $table) {
            // Drop the type column if the migration is rolled back
            $table->dropColumn('type');
        });
    }
}
