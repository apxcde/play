<?php

namespace App\Jobs;

use Spatie\WebhookClient\Jobs\ProcessWebhookJob as SpatieProcessWebhookJob;

class FailedCallWebHookJob extends SpatieProcessWebhookJob
{
    public function handle(): void
    {
        ray('failed call webhook job')->red();
    }
}
