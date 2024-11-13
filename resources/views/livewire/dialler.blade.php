<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Locked;
use App\Actions\GetToken;

new class extends Component {
    public string $callStatus = 'Device not registered!';
    public string $number = '5095637650';

    public function getToken(): string
    {
        $key = $this->getId(); // change this to something constant
        $seconds = 3600; // 1 hour...

        return Cache::remember($key, $seconds, function () {
            return GetToken::run();
        });
    }
}

?>

<div class="mt-28">
    <p class="text-lg font-bold">{{ $callStatus }}</p>
    <div class="mt-4">
        <flux:input wire:model="number" label="Number" />
    </div>
    <div class="mt-2 flex">
        <flux:button variant="primary" id="button-call">
            Call
        </flux:button>
        <flux:spacer />
        <flux:button variant="danger" id="button-hangup-outgoing" class="hidden">
            End Call
        </flux:button>
    </div>
</div>

@assets
    <script src="/js/twilio.min.js" defer></script>
@endassets

@script
    <script>
        const callButton = document.getElementById("button-call");
        const outgoingCallHangupButton = document.getElementById("button-hangup-outgoing");

        const token = await $wire.call('getToken'); // Token from the server

        const deviceOptions = {
            closeProtection: true,
            tokenRefreshMs: 30000,
        }

        const device = new Twilio.Device(token, deviceOptions);

        device.on('tokenWillExpire', () => {
            return $wire.call('getToken').then(token => device.updateToken(token));
        });

        console.log(token);

        async function makeOutgoingCall() {
            const params = { To: $wire.number };
            if (device) {
                console.log(`Attempting to call ${params.To}`);
                const call = await device.connect({ params });

                call.on("accept", function (call) {
                    console.log("Call in progress");
                    callButton.disabled = true;
                    outgoingCallHangupButton.classList.remove("hidden");
                });

                outgoingCallHangupButton.onclick = () => {
                    console.log("Hanging up ...");
                    call.disconnect();
                };
            }

            // device.connect({ params });
        }

        callButton.onclick = (e) => {
            e.preventDefault();
            makeOutgoingCall();
        };
    </script>
@endscript
