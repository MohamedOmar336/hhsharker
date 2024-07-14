<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('type'); // Type of product (general or home_page)
            $table->string('product_name_ar')->nullable();
            $table->string('product_name_en')->nullable();
            $table->string('model_number')->nullable();
            $table->string('power_supply')->nullable();
            $table->string('type_freon')->nullable();
            $table->text('product_description_ar')->nullable();
            $table->text('product_description_en')->nullable();
            $table->json('characteristics_ar')->nullable();
            $table->json('characteristics_en')->nullable();
            $table->string('optional_features_ar')->nullable();
            $table->string('optional_features_en')->nullable();
            $table->decimal('price', 10, 2);
            $table->string('status');
            $table->string('image')->nullable();
            $table->string('catalog')->nullable();
            $table->string('category')->nullable();
            $table->json('color')->nullable();
            $table->string('dimensions_volume_en')->nullable();
            $table->string('dimensions_volume_ar')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
