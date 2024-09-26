<?php

namespace App\Support\Webhooks;

use Illuminate\Http\Request;
use Spatie\WebhookClient\WebhookConfig;
use Spatie\WebhookClient\WebhookResponse\RespondsToWebhook;
use Symfony\Component\HttpFoundation\Response;

class FailedRespondsTo implements RespondsToWebhook
{
    public function respondToValidWebhook(Request $request, WebhookConfig $config): Response
    {
        return response()->json(['message' => 'not ok'], 400);
    }
}
