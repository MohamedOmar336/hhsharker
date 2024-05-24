<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTicketPrioritySettingsTable extends Migration
{
    public function up()
    {
        Schema::create('ticket_priority_settings', function (Blueprint $table) {
            $table->id('PriorityID');
            $table->string('Name_ar')->notNull();
            $table->string('Name_en')->notNull();
            $table->string('Status')->notNull();
            $table->timestamps();
        });

        // Insert default priorities
        DB::table('ticket_priority_settings')->insert([
            ['Name_en' => 'Low', 'Name_ar' => 'منخفض', 'Status' => 'Active'],
            ['Name_en' => 'Medium', 'Name_ar' => 'متوسط', 'Status' => 'Active'],
            ['Name_en' => 'High', 'Name_ar' => 'مرتفع', 'Status' => 'Active'],
            ['Name_en' => 'Urgent', 'Name_ar' => 'عاجل', 'Status' => 'Active']
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('ticket_priority_settings');
    }
}
