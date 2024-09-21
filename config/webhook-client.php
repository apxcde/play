<?php

return [
    'configs' => [
        [
            'name' => 'incoming_call',
            'signing_secret' => env('WEBHOOK_CLIENT_SECRET'),
            'signature_header_name' => 'Signature',
            'signature_validator' => \App\Support\CallSignatureValidator::class,
            'webhook_profile' => \Spatie\WebhookClient\WebhookProfile\ProcessEverythingWebhookProfile::class,
            'webhook_response' => \Spatie\WebhookClient\WebhookResponse\DefaultRespondsTo::class,
            'webhook_model' => \Spatie\WebhookClient\Models\WebhookCall::class,
            'store_headers' => '*',
            'process_webhook_job' => \App\Jobs\IncomingCallWebHookJob::class,
        ],
        [
            'name' => 'call_ended',
            'signing_secret' => env('WEBHOOK_CLIENT_SECRET'),
            'signature_header_name' => 'Signature',
            'signature_validator' => \App\Support\CallSignatureValidator::class,
            'webhook_profile' => \Spatie\WebhookClient\WebhookProfile\ProcessEverythingWebhookProfile::class,
            'webhook_response' => \Spatie\WebhookClient\WebhookResponse\DefaultRespondsTo::class,
            'webhook_model' => \Spatie\WebhookClient\Models\WebhookCall::class,
            'store_headers' => '*',
            'process_webhook_job' => \App\Jobs\CallEndedWebHookJob::class,
        ],
    ],
    'delete_after_days' => 30,
    'add_unique_token_to_route_name' => false,
];
