<?php

namespace App\Jobs;

use Spatie\WebhookClient\Jobs\ProcessWebhookJob as SpatieProcessWebhookJob;

class IncomingCallWebHookJob extends SpatieProcessWebhookJob
{
    public function handle(): void
    {
        // Handle the incoming webhook
        ray('incoming call webhook job')->blue();
        ray($this->webhookCall)->blue();
    }
}
