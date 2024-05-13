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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 191);
            $table->string('last_name', 191);
            $table->string('user_name', 191)->unique();
            $table->string('email', 191)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 191)->nullable();
            $table->string('phone', 191);
            $table->string('role_id', 191)->nullable();
            $table->boolean('active')->default(0);
            $table->string('image', 191)->nullable();
            $table->string('slug', 191)->nullable();
            $table->string('gender', 191)->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
