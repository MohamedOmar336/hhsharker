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
        Schema::create('ticket_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name_ar', 191);
            $table->string('name_en', 191);
            $table->string('image', 191)->nullable();
            $table->bigInteger('parent_id')->unsigned()->nullable();
            $table->integer('level')->default(1);
            $table->string('id_path', 191)->default(1);
            $table->string('slug', 191)->nullable();
            $table->boolean('active')->default(1);
            $table->timestamps();
            $table->softDeletes();

            // Foreign key constraint
            $table->foreign('parent_id')->references('id')->on('ticket_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ticket_categories');
    }
};
