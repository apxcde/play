<?php

namespace App\Jobs;

use Spatie\WebhookClient\Jobs\ProcessWebhookJob as SpatieProcessWebhookJob;

class IncomingCallWebHookJob extends SpatieProcessWebhookJob
{
    public function handle(): void
    {
        ray('incoming call received')->green();
    }
}
