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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Title of the task
            $table->text('description'); // Detailed description
            $table->unsignedBigInteger('assigned_to')->nullable(); // User ID of the person the task is assigned to
            $table->enum('status', ['pending', 'in_progress', 'completed', 'archived'])->default('pending'); // Status of the task
            $table->dateTime('due_date')->nullable(); // Deadline for the task
            $table->timestamps(); // Timestamps for task creation and updates

            // Foreign key constraints
            $table->foreign('assigned_to')->references('id')->on('users')->onDelete('set null'); // Assuming you have a 'users' table
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
};
