<?php

namespace App\Jobs;

use Spatie\WebhookClient\Jobs\ProcessWebhookJob as SpatieProcessWebhookJob;

class IncomingCallWebHookJob extends SpatieProcessWebhookJob
{
    public function handle(): void
    {
        // Handle the incoming webhook
        ray('Incoming Call Webhook Job');
        ray($this->webhookCall);
    }
}
