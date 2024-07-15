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
            $table->string('type'); // Type of product (Air Conditioner or  HomeAppliances)
            $table->string('product_name_ar', 191);
            $table->string('product_name_en', 191);
            $table->text('product_description_ar')->nullable();
            $table->text('product_description_en')->nullable();
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->foreignId('subcategory_id')->nullable()->constrained('categories')->onDelete('cascade');
            $table->string('model_number', 191)->nullable();
            $table->string('status', 191)->default('available');
            $table->string('catalog', 191)->nullable();
            $table->string('image', 191)->nullable();
            $table->json('characteristics_en')->nullable();
            $table->json('characteristics_ar')->nullable();
            $table->string('optional_features_ar', 191)->nullable();
            $table->string('optional_features_en', 191)->nullable();
            $table->boolean('best_selling')->default(false);
            $table->boolean('featured')->default(false);
            $table->boolean('recommended')->default(false);
            $table->string('hp_dimensions_volume_en', 191)->nullable();
            $table->string('hp_dimensions_volume_ar', 191)->nullable();
            $table->string('color', 191)->nullable();
            $table->string('power_supply', 191)->nullable();
            $table->string('type_freon', 191)->nullable();
            $table->text('technical_specifications')->nullable();
            $table->text('saso_certificate')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
