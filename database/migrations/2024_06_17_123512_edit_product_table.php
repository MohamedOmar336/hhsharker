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
        Schema::table('products', function (Blueprint $table) {
            $table->string('model_number', 191)->nullable();
            $table->string('power_supply', 191)->nullable();
            $table->string('type_of_freon', 191)->nullable();
            $table->longText('characteristics_en')->nullable();
            $table->longText('characteristics_ar')->nullable();
            $table->longText('optional_features_en')->nullable();
            $table->longText('optional_features_ar')->nullable();
            $table->string('catalog_url')->nullable(); // assuming a URL to the catalog file
            $table->string('color', 191)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn([
                'model_number',
                'power_supply',
                'type_of_freon',
                'characteristics_en',
                'characteristics_ar',
                'optional_features_en',
                'optional_features_ar',
                'catalog_url',
                'color'
            ]);

        });
    }
};
