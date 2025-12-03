@php
    $dash = 'jobseekerdashboard';
    $acmelogo = "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Flogowik.com%2Fcontent%2Fuploads%2Fimages%2Facme1361.logowik.com.webp&f=1&nofb=1&ipt=ce63cad211ccd3b78d01c86c2769e4d2491636ec6552b0c8d6f714a474658126";
@endphp

<x-layouts.app :title="__('Dashboard')" :dash=$dash>
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <div class="flex flex-row">
                <flux:header class="text-6xl m-3">ACME</flux:header>
            </div>
            <div class="flex flex-row">
                <flux:header>
                    Link to career page: <flux:button href="https://example.com">Applyz</flux:button>
                </flux:header>
                <flux:text class="flex items-center">
                    
                </flux:text>
            </div>
        </div>
    </div>
</x-layouts.app>