<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RecreateCharacteristicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Drop the existing 'characteristics' table if it exists
        Schema::dropIfExists('characteristics');

        // Create the new 'characteristics' table
        Schema::create('characteristics', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->string('image')->nullable();
            $table->string('Characteristic_name_en');
            $table->string('Characteristic_name_ar');
            $table->text('Characteristic_description_en')->nullable();
            $table->text('Characteristic_description_ar')->nullable();
            $table->timestamps();

            // Foreign key constraint linking product_id to the id in the products table
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop the 'characteristics' table
        Schema::dropIfExists('characteristics');
    }
}
