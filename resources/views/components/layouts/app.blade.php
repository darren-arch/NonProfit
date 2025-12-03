@php
    $dashboard = "dashboard"
@endphp
<x-layouts.app.sidebar :title="$title ?? null" :dash="$dash ?? $dashboard">
    <flux:main>
        {{ $slot }}
    </flux:main>
</x-layouts.app.sidebar>
