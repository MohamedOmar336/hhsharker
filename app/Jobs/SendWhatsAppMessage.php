<?php
namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Services\WhatsAppService;

class SendWhatsAppMessage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $phones;
    protected $message;

    public function __construct($phones, $message)
    {
        $this->phones = $phones;
        $this->message = $message;
    }

    public function handle(WhatsAppService $whatsAppService)
    {
        $whatsAppService->sendBroadcastMessage($this->phones, $this->message);
    }
}
