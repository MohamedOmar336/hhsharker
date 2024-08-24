<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropCharacteristicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Drop the 'characteristics' table
        Schema::dropIfExists('characteristics');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // You can optionally recreate the table here if you want to be able to roll back this migration
        Schema::create('characteristics', function (Blueprint $table) {
            $table->id();
            $table->string('name_en');
            $table->string('name_ar');
            $table->string('image')->nullable(); // Path to image file
            $table->enum('image_type', ['svg', 'png'])->default('png'); // SVG or PNG type
            $table->timestamps();
        });
    }
}
