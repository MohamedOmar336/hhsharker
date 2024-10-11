<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyTicketsTableForPolymorphicCreator extends Migration
{
    /**
     * Run the migrations.
     *
     * This migration assumes that it is safe to drop the 'CreatedBy' column.
     * Make sure that you have migrated or handled any necessary data before running this migration.
     */
    public function up()
    {
        Schema::table('tickets', function (Blueprint $table) {
            // Ensure that you can safely remove the column, check if your application is not using it
            // Drop foreign key constraints and the 'CreatedBy' column
            $table->dropForeign(['CreatedBy']);  // This line may need to be adjusted based on the actual foreign key constraint name
            $table->dropColumn('CreatedBy');

            // Add polymorphic columns
            $table->nullableMorphs('creator');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('tickets', function (Blueprint $table) {
            // Remove the polymorphic columns
            $table->dropMorphs('creator');

            // Add the 'CreatedBy' column back
            $table->foreignId('CreatedBy')->constrained('users')->onDelete('cascade');
        });
    }
}
