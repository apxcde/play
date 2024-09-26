<?php

namespace App\Jobs;

use Spatie\WebhookClient\Jobs\ProcessWebhookJob as SpatieProcessWebhookJob;

class CallEndedWebHookJob extends SpatieProcessWebhookJob
{
    public function handle(): void
    {
        ray('call ended webhook job')->purple();
    }
}
