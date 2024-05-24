<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;
    use Illuminate\Support\Facades\DB;
    
    class CreateTicketStatusSettingsTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('ticket_status_settings', function (Blueprint $table) {
                $table->id('StatusID');
                $table->string('Name_ar')->notNull();
                $table->string('Name_en')->notNull();
                $table->text('Description_ar')->nullable();
                $table->text('Description_en')->nullable();
                $table->timestamps();
            });
    
            // Insert default statuses
            DB::table('ticket_status_settings')->insert([
                ['Name_en' => 'Open', 'Description_en' => 'Ticket is open and awaiting action', 'Name_ar' => 'مفتوح', 'Description_ar' => 'التذكرة مفتوحة وتنتظر الإجراء'],
                ['Name_en' => 'Pending', 'Description_en' => 'Ticket is pending further information or action', 'Name_ar' => 'قيد الانتظار', 'Description_ar' => 'التذكرة قيد الانتظار لمزيد من المعلومات أو الإجراء'],
                ['Name_en' => 'Closed', 'Description_en' => 'Ticket is resolved and closed', 'Name_ar' => 'مغلق', 'Description_ar' => 'تم حل التذكرة وإغلاقها'],
                ['Name_en' => 'Escalated', 'Description_en' => 'Ticket has been escalated to a higher level of support', 'Name_ar' => 'تصعيد', 'Description_ar' => 'تم تصعيد التذكرة إلى مستوى أعلى من الدعم']
            ]);
        }
    
        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('ticket_status_settings');
        }
    }
    

