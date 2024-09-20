<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->string('product_name_en')->nullable();
            $table->string('product_name_ar')->nullable();
            $table->string('model_number')->nullable();
            $table->string('product_option_title')->nullable();
            $table->integer('product_option_list')->nullable();
            $table->string('main_option')->nullable();
            $table->string('feature_title_en')->nullable();
            $table->text('feature_description_en')->nullable();
            $table->string('feature_icon_en')->nullable();
            $table->string('feature_title_ar')->nullable();
            $table->text('feature_description_ar')->nullable();
            $table->string('feature_icon_ar')->nullable();
            $table->text('characteristics_en')->nullable();
            $table->text('characteristics_description_en')->nullable();
            $table->string('characteristics_icon_en')->nullable();
            $table->text('characteristics_ar')->nullable();
            $table->text('characteristics_description_ar')->nullable();
            $table->string('characteristics_icon_ar')->nullable();
            $table->text('technical_specification')->nullable();
            $table->string('saso')->nullable();
            $table->string('product_image')->nullable();
            $table->string('group')->nullable();
            $table->string('category')->nullable();
            $table->string('sub_category')->nullable();
            $table->string('child')->nullable();
            $table->string('sub_child')->nullable();
            $table->string('status')->nullable();
            $table->boolean('best_selling')->default(0);
            $table->boolean('featured')->default(0);
            $table->boolean('recommened')->default(0);
            $table->string('title_tag_en')->nullable();
            $table->string('title_tag_ar')->nullable();
            $table->text('meta_description_en')->nullable();
            $table->text('meta_description_ar')->nullable();
            $table->json('product_schema_en')->nullable();
            $table->json('product_schema_ar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
