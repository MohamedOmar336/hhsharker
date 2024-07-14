<?php

// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;
// use Illuminate\Support\Facades\DB;

// class CreateSmtpSettingsTable extends Migration
// {
//     public function up()
//     {
//         Schema::create('smtp_settings', function (Blueprint $table) {
//             $table->id();
//             $table->string('mail_driver')->nullable();
//             $table->string('mail_host')->nullable();
//             $table->integer('mail_port')->nullable();
//             $table->string('mail_username')->nullable();
//             $table->string('mail_password')->nullable();
//             $table->string('mail_encryption')->nullable();
//             $table->timestamps();
//         });

//         // Inserting a row into smtp_settings table
//         DB::table('smtp_settings')->insert([
//             'mail_driver' => 'smtp',
//             'mail_host' => 'smtp.example.com',
//             'mail_port' => 587,
//             'mail_username' => 'your_email@example.com',
//             'mail_password' => 'your_email_password',
//             'mail_encryption' => 'tls',
//             'created_at' => now(),
//             'updated_at' => now(),
//         ]);
//     }

//     public function down()
//     {
//         Schema::dropIfExists('smtp_settings');
//     }
// }
