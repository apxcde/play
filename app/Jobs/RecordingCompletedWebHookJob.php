<?php

namespace App\Jobs;

use Spatie\WebhookClient\Jobs\ProcessWebhookJob as SpatieProcessWebhookJob;

class RecordingCompletedWebHookJob extends SpatieProcessWebhookJob
{
    public function handle(): void
    {
        ray('call recording webhook job')->blue();
    }
}
