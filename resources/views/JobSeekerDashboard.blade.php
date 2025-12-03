@php
    $dash = 'jobseekerdashboard';
    $acmelogo = "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Flogowik.com%2Fcontent%2Fuploads%2Fimages%2Facme1361.logowik.com.webp&f=1&nofb=1&ipt=ce63cad211ccd3b78d01c86c2769e4d2491636ec6552b0c8d6f714a474658126";
@endphp

<x-layouts.app :title="__('Dashboard')" :dash=$dash>
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <div class="flex flex-row justify-between">
                <flux:header>Projects:</flux:header>
                <flux:modal.trigger name="add"><flux:button class="m-2">Add New</flux:button></flux:modal.trigger>
            </div>
            <div class="flex flex-col rounded-xl border border-neutral-400 dark:border-neutral-600 m-2 p-2 justify-between">
                <flux:header>Jet Simulation</flux:header>
                <flux:text>
                    Creating a fully functional simulation using C. I am working in tandom with Lizzy our aerospace engineering undergrad. 
                    This project is based off of Dave and Kelly's simulation that they made last month. Our improvements will be on collision data and how that
                    affects the trajectory of a jet mid flight.
                </flux:text>
            </div>
            {{-- <div class="flex flex-row rounded-xl border border-neutral-400 dark:border-neutral-600 m-2 p-2 justify-between">
                <flux:header>Current Projects</flux:header>
            </div> --}}
        </div>
    </div>
    <flux:modal name="add" class="md:w-96">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Add New Project</flux:heading>
            </div>
            <flux:input type="text" label="Project Name"/>
            <flux:textarea type="text" label="Description"/>
            <flux:input type="text" label="Partners"/>
            <flux:input type="text" label="Activation Code"/>
            <flux:button>Submit</flux:button>
        </div>  
    </flux:modal>
</x-layouts.app>

        {{-- <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
        </div> --}}
        {{-- <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" /> --}}