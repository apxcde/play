<?php

namespace App\Actions;

use Lorisleiva\Actions\Concerns\AsAction;
use Twilio\Jwt\ClientToken;

class GetToken
{
    use AsAction;

    public function handle(): string
    {
        $clientToken = new ClientToken(config('services.twilio.sid'), config('services.twilio.token'));
        $clientToken->allowClientOutgoing(config('services.twilio.twiml_sid'));

        return $clientToken->generateToken(86400); // 24hrs
    }
}
